import React, { Component } from 'react';
import Login from '../auth/Login';
import Register from '../auth/Register';

class LoginLayout extends Component {
    render() {
        return (
            <div className="grid">
                <div className="content">
                    <div className="brand">
                        <h1>RankUp</h1>
                    </div>
                </div>
                <aside className="aside">
                    <Login />
                    <Register />
                </aside>
            </div>
        );
    }
}

export default LoginLayout;
