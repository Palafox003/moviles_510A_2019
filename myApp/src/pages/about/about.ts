import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Geolocation } from '@ionic-native/geolocation';

@Component({
  selector: 'page-about',
  templateUrl: 'about.html'
})
export class AboutPage {

  respuesta;

  constructor(public navCtrl: NavController,private geolocation: Geolocation) {

  }

 geo(){
      const subscription = this.geolocation.watchPosition()
                                  .subscribe(position => {
      console.log(position.coords.longitude + ' ' + position.coords.latitude);
    });

    // To stop notifications
    //subscription.unsubscribe();
  }
}
