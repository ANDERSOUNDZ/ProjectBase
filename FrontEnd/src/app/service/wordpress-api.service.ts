import { Injectable } from '@angular/core';
import { HttpClient} from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class WordpressApiService {

  constructor( public httpClient: HttpClient) { }

  getMedia(){
    return this.httpClient.get(`http://localhost:8888/ProjectBase/BackEndWP/wp-json/wp/v2/media`);
  }

}
