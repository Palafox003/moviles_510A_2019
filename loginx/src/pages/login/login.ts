import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { AngularFireAuth } from 'angularfire2/auth';
import * as firebase from 'firebase/app';
import { AuthProvider } from '../../providers/auth/auth';


@Component({
  selector: 'page-login',
  templateUrl: 'login.html'
})
export class LoginPage {

    user= { email : '', password : ''};

  constructor(public navCtrl: NavController,private afAuth :  AngularFireAuth,  public auth : AuthProvider,) {

  }

  registrar(){
    this.auth.registrar(this.user.email,this.user.password)
    .then((user) => {
      // El usuario se ha creado correctamente
      console.log("Datos registrados");
    })
    .catch(err=>{
      console.log("Error al registrar");
    })

  }

  login()
  {
      this.auth.loginUser(this.user.email,this.user.password ).then((user) => {
          console.log("Usuaario conectado.");
        }
      )
       .catch(err=>{
        console.log("Error al conectar");
      })
    }
    cerrarSesion(){
        this.auth.logout();
    }
}