import React from 'react';
import ReactDOM from 'react-dom/client'; // nueva importación

const IndexView = () => {
    return (
        <div>
            <h1>Hello World</h1>
        </div>
    );
};

const root = ReactDOM.createRoot(document.getElementById('App')); // montar el componente
root.render(<IndexView />);

export default IndexView;
