import { Component, OnInit, Input } from '@angular/core';
import { Hero } from '../hero';
 
@Component({
  selector: 'app-hero-detail',
  templateUrl: './hero-detail.html'
})
export class HeroDetail implements OnInit {
  @Input() hero: Hero;
 
  constructor() { }
 
  ngOnInit() {
  }
 
}