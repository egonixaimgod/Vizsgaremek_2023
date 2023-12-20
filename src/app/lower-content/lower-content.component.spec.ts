import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LowerContentComponent } from './lower-content.component';

describe('LowerContentComponent', () => {
  let component: LowerContentComponent;
  let fixture: ComponentFixture<LowerContentComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [LowerContentComponent]
    });
    fixture = TestBed.createComponent(LowerContentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
