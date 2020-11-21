import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { KpasapexComponent } from './kpasapex/kpasapex.component';
import { CrudComponent } from './crud/crud.component';

@NgModule({
  declarations: [
    AppComponent,
    KpasapexComponent,
    CrudComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
