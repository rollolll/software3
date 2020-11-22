import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AddEmpresaComponent } from './components/add-empresa/add-empresa.component';
import { EmpresaDetailsComponent } from './components/empresa-details/empresa-details.component';
import { EmpresaListComponent } from './components/empresa-list/empresa-list.component';
import { FormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    AddEmpresaComponent,
    EmpresaDetailsComponent,
    EmpresaListComponent,
    FormsModule,
    HttpClientModule
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
