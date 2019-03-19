import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import {Observable} from 'rxjs';
import { of } from 'rxjs/observable/of';
import { catchError, map, tap } from 'rxjs/operators';

import { Post } from './pages/home/post';
import { HEROES } from './pages/home/mock-heroes';

const httpOptions = {
    headers: new HttpHeaders({ 'Content-Type': 'application/json' })
  };

@Injectable()

export class PostService{

    private postUrl = 'http://biblioteca.sicati.com.mx/m.carreras';

 constructor( private http: HttpClient) { }

 getPosts(): Observable<Post[]> {
    return this.http.get<Post[]>(this.postUrl);
}
}