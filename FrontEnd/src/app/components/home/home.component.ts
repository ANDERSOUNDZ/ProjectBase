import { Component, OnInit } from '@angular/core';
import { WordpressApiService } from 'src/app/service/wordpress-api.service';
import { Media, Multimed } from 'src/app/models/image';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  image: Media[];
  //image = [];

  constructor(private wordPressServ: WordpressApiService) { }

  ngOnInit() {
    //1er Método

    this.wordPressServ.getMedia().subscribe((response: Media[])=>{
      if(response){
         this.image = response;
         console.log(this.image);
      }
    });
    

    //////////////////////////////////////////
    //2do Método
    /*this.wordPressServ.getImage().subscribe(
    response =>{
       for (let img in response){
        if(response.hasOwnProperty(img)){
          this.image.push(response[img]);
          console.log(this.image);
        }
       }
    }
    );*/
    /////////////////////////////////////////
    
  }

  

}
