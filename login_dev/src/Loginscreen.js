import React from 'react';
import './Loginscreen.css';
import banner_fwg from "./banner_fwg.png";
import myUsers from './data/getJSON_getUsername.json';
import 'bootstrap/dist/css/bootstrap.css';
import $ from 'jquery'; 
import base64 from 'react-native-base64';
import { faUser } from '@fortawesome/free-solid-svg-icons';
import { faKey } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
// import { Redirect } from "react-router-dom";

class LoginForm extends React.Component {
  LoginMain = () =>
  {
    var username_val = $("#username").val();
    var password_val = $("#password").val(); 

    if(username_val==="" || password_val==="")
    {
      $("#msgResult").css("color","#dc3545");
      $("#msgResult").html("Input Username and Password");
    }
    else
    {
      var DataStatus;
      var FLAG_CHECK_WARNING;
      var FLAG_CHECK_FINISH="0";
      var url = '../dashboard/main.php';
      myUsers.map( (data) => {
        if( username_val===data.username && password_val===base64.decode(data.password) )
        {
          FLAG_CHECK_WARNING = "0";
          FLAG_CHECK_FINISH = "1";
          return DataStatus = data.status;
        }
        else
        {
          return FLAG_CHECK_WARNING = "1";
        }
      })
    }
    
    if(FLAG_CHECK_WARNING==="1" && FLAG_CHECK_FINISH==="0")  
    {
      $("#msgResult").css("color","#dc3545");
      $("#msgResult").html("Username and Password Incorrect");
      $("#password").text("");
    }
    else if(FLAG_CHECK_FINISH==="1")
    {
      localStorage.setItem('usernameLocalStorage', username_val);
      localStorage.setItem('statusLocalStorage', DataStatus);
      window.location.assign(url);
    }

  }
  handleKeyPress = (e) => {
    if (e.key === "Enter") {
      const { onAccept } = this.props;
      onAccept && onAccept(e.target.value);
      this.LoginMain()
    }
  }
  render() {
    return (
      <section className="section container">
        <div className="card card-login mx-auto text-center bg-dark">
          <div className="card-header mx-auto bg-dark">
            <span> 
              {/* <img src="https://static.wixstatic.com/media/2fe8ff_c0ed6354adac43d09b18816fce9bbd4f~mv2.png/v1/fill/w_413,h_113,al_c,q_85,usm_0.66_1.00_0.01/Logo%20FWS.webp" className="w-75" alt="Logo"></img>  */}
              <img src={banner_fwg} className="w-75" alt="Logo"></img>

            </span>
            <br/>
            <span className="logo_title mt-5"> HR WorkTime 
            </span>
          </div>
          <div className="card-body">
            <form method="post">
              <div className="input-group form-group">
                <div className="input-group-prepend">
                  <span className="input-group-text"><FontAwesomeIcon icon={faUser} /></span>
                </div>
                  <input type="text" id="username" className="form-control" placeholder="Username" onKeyPress={this.handleKeyPress}></input>
              </div>

                        <div className="input-group form-group">
                            <div className="input-group-prepend">
                                <span className="input-group-text"><FontAwesomeIcon icon={faKey} /></span>
                            </div>
                            <input type="password" id="password" className="form-control" placeholder="Password" onKeyPress={this.handleKeyPress}></input>
                        </div>

                        <div className="form-group">
                            <input type="button" id="LoginBtn" value="Login" className="btn btn-outline-danger float-right login_btn" onClick={this.LoginMain} ></input>
                        </div>
            </form>
          </div>
          <div className="card-footer">
            <span id="msgResult"></span>
          </div>
        </div>
      </section>
    )
  }
}

export default LoginForm