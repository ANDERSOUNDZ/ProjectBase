import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { 
  MatMenuModule,
  MatToolbarModule,
  MatButtonModule } from '@angular/material';


@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    MatMenuModule,
    MatToolbarModule,
    MatButtonModule
  ],
  exports:[
    MatMenuModule,
    MatToolbarModule,
    MatButtonModule
  ]
})
export class MaterialModule { }
