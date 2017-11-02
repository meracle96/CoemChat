@extends('layouts.layoutvue')
@section('content')
    <div class="container">
      <div class="row" id="app">
        <div class="panel panel-default" style="width:100%; margin-top:30px;">
            <div class="panel-heading text-center">
                <div class="row">
                    <div class="col-md-3">
                      <h3>Coem Chat Room <span class="badge badge-pill" style="background-color:#d9534f;">@{{ numberOfUsers }} People Here</span></h3>
                    </div>
                    <div class="col-md-offset-8 col-md-1">
                        <div class="icon"><span class="glyphicon glyphicon-info-sign"></span></div>
                    </div>
                </div>
            </div>
            <div class="panel-body" v-chat-scroll>
              <div class="badge badge-pill badge-primary">
                @{{ typing }}
              </div>
                <Message
                  v-for="value,index in chat.message"
                  :key=value.index
                  :kelas= chat.kelas[index]
                  :user= chat.user[index]
                  :time= chat.time[index]
                >
                  @{{ value }}
                </Message>
            </div>
            <div class="panel-footer">
              <div class="input-group">
                <input id="message-text" name="message" type="text" class="form-control" placeholder="Message" v-model="message" @keyup.enter="send">
                <span class="input-group-btn">
                  <button id="envoi" class="btn btn-default" type="button"><span class="glyphicon glyphicon-send" @click="send"></span></button>
                </span>
              </div>
            </div>
        </div>

        <div class="modal" id="modal-photo">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Envoyer une photo</h4>
                </div>
                <div class="modal-body">
                    <input type="file" name ="photo" id="photo" accept="image/*">
                </div>
                <div class="modal-footer">
                    <button id="validation" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
