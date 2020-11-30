import { Component, OnInit } from '@angular/core';
import { EmpresasService } from '../../empresas.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  usuario: string = '';
  pass: string = '';
  listLogin: any;
  list = [];
  constructor(private articulosServicio: EmpresasService, private router: Router) {
    this.articulosServicio.recuperarLogin().forEach(ele => {
      this.listLogin = (JSON.stringify(ele)).toString();
      console.log(JSON.stringify(ele));
    });
  }

  ngOnInit(): void {
  }

  Login() {
    let data = JSON.parse(this.listLogin);
    let rta = 0;

    for (let index = 0; index < data.length; index++) {
      let element = data[index];

      if (element.email_usuario === this.usuario && element.contrasenio_usuario === this.pass) {
        this.router.navigate(['/add',]);
        rta = 1;
      }

    }

    if (rta === 0) {
      alert('El usuario no existe');
    }

  }
}
