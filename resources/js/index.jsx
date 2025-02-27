import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';

const IndexView = () => {
    const currentYear = new Date().getFullYear();
    const [show, setShow] = useState(false);
    const [year, setYear] = useState(currentYear);
    const [drawData, setDrawData] = useState([]);

    useEffect(() => {
        if (show) {
            fetch(`/api/draw/${year}`)
                .then(response => response.json())
                .then(data => setDrawData(data.locations || []))
                .catch(error => console.error('Error fetching data:', error));
        }
    }, [year, show]);

    const yearOptions = Array.from({ length: 5 }, (_, i) => currentYear - i);

    const matrix = Array.from({ length: 5 }, () => Array(5).fill(''));
    drawData.forEach(item => {
        const { x_coordinate, y_coordinate, crew } = item;
        if (x_coordinate < 5 && y_coordinate < 5) {
            const adjustedColumn = 5 - 1 - x_coordinate;
            matrix[y_coordinate][adjustedColumn] = crew ? crew.name : '';
        }
    });

    return (
        <div className="h-screen flex flex-col items-center justify-center bg-gray-100 p-4">
            <button
                onClick={() => setShow(prev => !prev)}
                className="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition"
            >
                {show ? "Ocultar sorteo" : "Mostrar sorteo"}
            </button>
            {show && (
                <div className="mt-8 p-6 bg-white rounded-lg shadow-lg">
                    <div className="mb-4">
                        <select
                            value={year}
                            onChange={(e) => setYear(e.target.value)}
                            className="block w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400"
                        >
                            {yearOptions.map(y => (
                                <option key={y} value={y}>{y}</option>
                            ))}
                        </select>
                    </div>
                    <div className="mt-4 overflow-auto">
                        <table className="min-w-full divide-y divide-gray-200">
                            <tbody className="bg-white divide-y divide-gray-200">
                                {matrix.map((row, i) => (
                                    <tr key={i}>
                                        {row.slice().reverse().map((cell, j) => (
                                            <td
                                                key={j}
                                                className="border border-gray-300 w-36 h-36 text-center align-middle text-2xl shadow-md"
                                            >
                                                {cell}
                                            </td>
                                        ))}
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            )}
        </div>
    );
};

const root = ReactDOM.createRoot(document.getElementById('App'));
root.render(<IndexView />);

export default IndexView;
