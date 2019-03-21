import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Geolocation } from '@ionic-native/geolocation';
import { Post } from './post';
import { PostService } from '../../post.service';

@Component({
  selector: 'page-about',
  templateUrl: 'about.html'
})
export class AboutPage {

  post: any={};
  constructor(public navCtrl: NavController,private geolocation: Geolocation,private postService: PostService) {

  }

 geo(){
      const subscription = this.geolocation.watchPosition()
                                  .subscribe(position => {
      console.log(position.coords.longitude + ' ' + position.coords.latitude);
    });

    // To stop notifications
    //subscription.unsubscribe();
  }

  add(post:Post){
    //let json = JSON.stringify(carrera);
    //let params = "json="+json;
    console.log(post);

   this.postService.addCarrera(post)
        .subscribe(res=>{
          //console.log(carrera);
          //let json = JSON.stringify(res);
          console.log('Resultado: '+res);
        });
  }
}
