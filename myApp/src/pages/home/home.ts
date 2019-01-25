import { Component, OnInit } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Vibration } from '@ionic-native/vibration';
import { Hero } from './hero';
import { Post } from './post';
import { HeroService } from '../../hero.service';
import { PostService } from '../../post.service';



@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage implements OnInit{

  selectedHero: Hero;

  heroes: Hero[];
  posts: Post[];

  constructor(public navCtrl: NavController, private vibration: Vibration,private heroService: HeroService, private postService: PostService) {

  }

  ngOnInit() {
    this.getHeroes();
    this. getPosts();
  }

  getPosts(): void {
    this.postService.getPosts()
    .subscribe(posts => this.posts = posts);
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
