import { Component, OnInit } from '@angular/core';
import { WordpressApiService } from 'src/app/service/wordpress-api.service';
import { Media } from 'src/app/models/image';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  image: Media[];

  constructor(private wordPressServ: WordpressApiService) { }

  ngOnInit() {
    this.wordPressServ.getImage().subscribe(
    (response: Media[]) =>{
      if(response){
        this.image = response;
      }else{
        this.image = [];
      }
    }
    );
    
  }

  

}
