import React, { useState } from "react";
import { useNavigate } from 'react-router-dom';

function PageRegister() {

    const [firstName, setFirstName] = useState();
    const [lastName, setLastName] = useState();
    const [email, setEmail] = useState();
    const [password, setPassword] = useState();
    const [confirmpassword, setConfirmpassword] = useState();

    const navigate = useNavigate();

    function handleFisrtName(text) {
        setFirstName(text);
    }

    const handleLastName = (text) => {
        setLastName(text);
    }

    const handleEmail = (text) => {
        setEmail(text);
    }

    const handlePassword = (text) => {
        setPassword(text);
    }

    const handleConfirm = (text) => {
        setConfirmpassword(text);
    }
    const registerAccount = () => {

                navigate('/')
    }

    return (
        <div style={{ textAlign: 'center', justifyContent: 'center' }}>
                        <text style={{fontSize: '3em', marginTop: '40px'}}>
                            Bienvenue sur Dashboard! Pour accéder a nos services veuillez créer un compte.
                        </text>
                        <div style={{ textAlign: 'center', justifyContent: 'center' }}>
                        <div style={{ marginTop: '20px' }}>
                            <input  style={{fontSize: '3em', marginTop: '10px'}} type='text'name='name' placeholder='Prénom' className='input0' value={firstName} onChange={e => handleFisrtName(e.target.value)}></input>
                        </div>
                        <div>
                            <input  style={{fontSize: '3em', marginTop: '10px'}} type='text'name='name' placeholder='Nom' className='input1' value={lastName} onChange={e => handleLastName(e.target.value)}></input>
                        </div>
                        <div>
                            <input  style={{fontSize: '3em', marginTop: '10px'}} type='text' name='name' placeholder='Email' className='input2'  value={email} onChange={e => handleEmail(e.target.value)}></input>
                        </div>
                        <div>
                            <input  style={{fontSize: '3em', marginTop: '10px'}} type='password' name='password' placeholder='mot de passe' className='input3'  value={password} onChange={e => handlePassword(e.target.value)}></input>
                        </div>
                        <div>
                            <input  style={{fontSize: '3em', marginTop: '10px'}} type='password' name='password' placeholder='confirmation mot de passe' className='input4'  value={confirmpassword} onChange={e => handleConfirm(e.target.value)}></input>
                        </div>
                        <div>
                            <button style={{fontSize: '3em', marginTop: '10px'}} type="button" className='button' onClick={registerAccount}>S'inscrire</button>
                        </div>
                        </div>
         </div>
    );
}

export default PageRegister;