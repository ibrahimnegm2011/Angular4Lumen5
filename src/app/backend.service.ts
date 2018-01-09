import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from "rxjs";

@Injectable()
export class BackendService {


    private basicUrl: string = 'http://localhost:8000/api/';

    private isLogged: boolean;
    private token: string;
    private user: any;

    constructor(private http: HttpClient) {
        this.isLogged = false;
        this.token = this.user = null;
    }

}
