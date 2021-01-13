@extends('layouts.app')


@section('content') 
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">
            User
          </div>
          <div class="card-body">
            <user-list :users="userList"></user-list>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            Message
          </div>
          <div class="card-body body-messages">
            <chat-messages :messages="messages" :currentuser="currentUser"></chat-messages>
          </div>
          <div class="card-footer">
            <chat-form></chat-form>
          </div>
        </div>            
      </div>
    </div>
  </div>
@endsection