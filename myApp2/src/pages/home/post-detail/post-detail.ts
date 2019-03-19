import { Component, OnInit, Input } from '@angular/core';
import { Post } from '../post';
 
@Component({
  selector: 'app-hero-detail',
  templateUrl: './post-detail.html'
})
export class PostDetail implements OnInit {
  @Input() post: Post;
 
  constructor() { }
 
  ngOnInit() {
  }
 
}