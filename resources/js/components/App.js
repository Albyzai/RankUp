import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import LoginLayout from './layouts/LoginLayout';

class App extends Component {
  render () {
    return (
      <BrowserRouter>
        <div>
          <LoginLayout />
        </div>
      </BrowserRouter>
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'));