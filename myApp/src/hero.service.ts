import { Injectable } from '@angular/core';
import {Observable} from 'rxjs';
import { of } from 'rxjs/observable/of';

import { Hero } from './pages/home/hero';
import { HEROES } from './pages/home/mock-heroes';

@Injectable()

export class HeroService{

 constructor() { }
 getHeroes(): Observable<Hero[]> {
    
   // TODO: send the message _after_ fetching the heroes
   return of(HEROES);
 }
}