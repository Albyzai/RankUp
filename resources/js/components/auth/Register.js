import React, { Component } from 'react';
import axios from 'axios';

class Register extends Component {
    constructor() {
        super();
        this.state = {
            email: '',
            password: '',
            errors: {}
        };
    }

    onChange = (e) => {
        this.setState({ [e.target.name]: e.target.value });
    };

    onSubmit = (e) => {
        e.preventDefault();

        const userData = {
            email: this.state.email,
            password: this.state.password
        };

        axios
            .post('api/register', {
                email: this.state.email,
                password: this.state.password
            })
            .then((res) => {
                console.log(res);
                localStorage.setItem('token', res.data.auth.access_token);
                localStorage.setItem('user', res.data.user);
            })
            .catch((err) => {
                console.log(
                    'email: ' +
                        this.state.email +
                        ' password: ' +
                        this.state.password
                );
            });
    };

    render() {
        return (
            <div className="login-wrapper">
                <h1>Register</h1>
                <form onSubmit={this.onSubmit}>
                    <div className="form-group">
                        <input
                            type="email"
                            name="email"
                            placeholder="johndoe@example.com"
                            className="form-control"
                            onChange={this.onChange}
                        />
                        <input
                            type="password"
                            name="password"
                            placeholder="password"
                            className="form-control"
                            onChange={this.onChange}
                        />
                        <button type="submit" className="btn btn-primary">
                            GO
                        </button>
                    </div>
                </form>
            </div>
        );
    }
}

export default Register;
