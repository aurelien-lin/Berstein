import React, { useState } from "react";
import ReactDOM from "react-dom";

import { Navigate } from 'react-router-dom';

import "./Ulogin.css";

function Ulogin() {
  // React States
  const [errorMessages, setErrorMessages] = useState({});
  const [email, setEmail] = useState();
  const [password, setPassword] = useState();

  const errors = {
    uname: "invalid username",
    pass: "invalid password"
  };

  const handleEmail = (text) => {
    setEmail(text);
  }

  const handlePass = (text) => {
    setPassword(text);
  }
  // Generate JSX code for error message
  const renderErrorMessage = (name) =>
    name === errorMessages.name && (
      <div className="error">{errorMessages.message}</div>
    );


  const LoginAccount = () => {
    const axios = require('axios');
    const qs = require('qs')

    const data = qs.stringify({
      "email": email,
      "password": password,
    });

    const config = {
      method: 'post',
      url: 'http://localhost:8080/users/login',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      data: data
    };

    axios(config)
      .then(function (response) {
        console.log(JSON.stringify(response.data));
        if (response.data.is_producteur === "true")
          <Navigate to='/Home' />
      })
      .catch(function (error) {
        console.log(error);
      });
  }

  return (
    <div className="app">
      <div className="login-form">
        <div className="title">Connexion</div>
        <div className="input-container">
          <label>Utilisateur </label>
          <input type="text" name="uname" value={email} onChange={e => handleEmail(e.target.value)} required />
          {renderErrorMessage("uname")}
        </div>
        <div className="input-container">
          <label>Mot de Passe </label>
          <input type="password" name="pass" value={password} onChange={e => handlePass(e.target.value)} required />
          {renderErrorMessage("pass")}
        </div>
        <div>
          Nouvelle Utilisateur?
          <a href='/pageRegister'> S'inscrire </a>
        </div>
        <div className="button-container">
          <button type="button" name="button" onClick={LoginAccount}> Connexion </button>
        </div>
      </div>
    </div>
  );
}

const rootElement = document.getElementById("root");
ReactDOM.render(<Ulogin />, rootElement);

export default Ulogin;
