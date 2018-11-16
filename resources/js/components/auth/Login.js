import React, { Component } from 'react'

class Login extends Component {
  render() {
    return (
      <div className="login-wrapper">
          <h1>Login</h1>
          <div className="form-group">
            <input type="email" placeholder="johndoe@example.com" className="form-control" />
            <input type="password" placeholder="password" className="form-control" />
            <button type="submit" class="btn btn-primary">GO</button>
          </div>
      </div>
    )
  }
}

export default Login;