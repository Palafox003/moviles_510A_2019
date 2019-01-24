import { Component, OnInit } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Vibration } from '@ionic-native/vibration';
import { Hero } from './hero';
import { HeroService } from '../../hero.service';



@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage implements OnInit{

  selectedHero: Hero;

  heroes: Hero[];

  constructor(public navCtrl: NavController, private vibration: Vibration,private heroService: HeroService) {

  }

  ngOnInit() {
    this.getHeroes();
  }

  onSelect(hero: Hero): void {
    this.selectedHero = hero;
  }

  vibrar(){
    this.vibration.vibrate(1000);
  }

  getHeroes(): void {
    this.heroService.getHeroes()
        .subscribe(heroes => this.heroes = heroes);
  }

}
