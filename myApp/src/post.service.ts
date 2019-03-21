import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import {Observable} from 'rxjs';
import { of } from 'rxjs/observable/of';
import { catchError, map, tap } from 'rxjs/operators';

import { Post } from './pages/home/post';
import { HEROES } from './pages/home/mock-heroes';

const httpOptions = {
    headers: new HttpHeaders({ 'Content-Type': 'application/x-www-form-urlencoded'})
  };

@Injectable()

export class PostService{

    private postUrl = 'http://biblioteca.sicati.com.mx/m.carreras';
    private postUrl2 = 'http://biblioteca.sicati.com.mx/mc.carreras';

 constructor( private http: HttpClient) { }

getPosts(): Observable<Post[]> {
    return this.http.get<Post[]>(this.postUrl);
}

addCarrera(p:Post):Observable<Post>{
  let json = JSON.stringify(p);
  let params =json;

  console.log('Datos enviados='+params);

  //let headers = new HttpHeaders().set('Content-Type','application/x-www-form-urlencoded');

  return this.http.post<Post>(this.postUrl2, params, httpOptions);
}
}