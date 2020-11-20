import { ComponentFixture, TestBed } from '@angular/core/testing';

import { KpasapexComponent } from './kpasapex.component';

describe('KpasapexComponent', () => {
  let component: KpasapexComponent;
  let fixture: ComponentFixture<KpasapexComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ KpasapexComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(KpasapexComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
