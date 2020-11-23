import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class EmpresasService {
  url='http://localhost/Archivos/';
  constructor(private http: HttpClient) { }

  recuperarTodos() {
    return this.http.get(`${this.url}recuperarTodos.php`);
  }
  alta(empresa:any){
    return this.http.post(`${this.url}alta.php`, JSON.stringify(empresa));
  }
  baja(codigo:number){
    return this.http.get(`${this.url}baja2.php?codigo=${codigo}`);

  }
  seleccionar(codigo:number){
    return this.http.get(`${this.url}seleccionar2.php?codigo=${codigo}`);
  }
  modificacion(empresa:any){
    return this.http.post(`${this.url}modificacion2.php`, JSON.stringify(empresa));
  }
}