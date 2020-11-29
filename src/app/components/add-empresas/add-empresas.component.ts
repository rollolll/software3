import { Component, OnInit } from '@angular/core';
import { EmpresasService } from '../../empresas.service';
import { DataSource } from '@angular/cdk/collections';


@Component({
  selector: 'app-add-empresas',
  templateUrl: './add-empresas.component.html',
  styleUrls: ['./add-empresas.component.css']
})
export class AddEmpresasComponent implements OnInit {
  title = 'proyectoANG-PHP';
 
  displayedColumns: string[] = ['Nit', 'Nombre_emp', 'Telefono', 'Direccion', 'Ciudad'];
  empresa:any;
  art = {
    Nit: null,
    Nombre_emp: null,
    Telefono: null,
    Direccion: null,
    Ciudad: null,

  }
  constructor(private articulosServicio:EmpresasService ) { }

  ngOnInit() {
    this.recuperarTodos();
  }


  
  recuperarTodos() {
    this.articulosServicio.recuperarTodos().subscribe(result => this.empresa = result);
    
  }

  alta() {
    this.articulosServicio.alta(this.art).subscribe(datos => {
   
        this.recuperarTodos();
      
    });
  }

  baja(Nit:number) {
    this.articulosServicio.baja(Nit).subscribe(datos => {
      
        this.recuperarTodos();
      
    });
  }

  modificacion() {
    this.articulosServicio.modificacion(this.art).subscribe(datos => {
     
        this.recuperarTodos();
      
    });
  }

 

  hayRegistros() {
    return true;
  }
}
export class TableBasicExample {
 

}