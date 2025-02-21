import React from 'react';
import ReactDOM from 'react-dom/client';



function App() {
    return (
        <div>
            <h1>Hello, world!</h1>
        </div>
    )


}

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>
);