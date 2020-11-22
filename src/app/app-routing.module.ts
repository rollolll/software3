import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EmpresaListComponent } from './components/empresa-list/empresa-list.component';
import { EmpresaDetailsComponent } from './components/empresa-details/empresa-details.component';
import { AddEmpresaComponent } from './components/add-empresa/add-empresa.component';



const routes: Routes = [
  { path: '', redirectTo: 'empresa', pathMatch: 'full' },
  { path: 'empresa', component: EmpresaListComponent },
  { path: 'empresa/:id', component: EmpresaDetailsComponent },
  { path: 'add', component: AddEmpresaComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
