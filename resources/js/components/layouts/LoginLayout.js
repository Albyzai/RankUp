import React, { Component } from 'react';
import Login from '../auth/Login';

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
        </aside>
        </div>
    )
  }
}

export default LoginLayout;