import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailsEmpresasComponent } from './details-empresas.component';

describe('DetailsEmpresasComponent', () => {
  let component: DetailsEmpresasComponent;
  let fixture: ComponentFixture<DetailsEmpresasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ DetailsEmpresasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(DetailsEmpresasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
