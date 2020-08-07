import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { AppRootSecondComponent } from './app-root-second/app-root-second.component';

@NgModule({
  declarations: [
    AppComponent,
    AppRootSecondComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent, AppRootSecondComponent]
})
export class AppModule { }
