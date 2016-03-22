<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

<style>
  /************* MODAL **************/
  .modal {
    background:rgba(0,0,0, .3);
  }

  .modal .modal-dialog, .modal .modal-content {
   color: rgb(62, 63, 58);
 }

 .modal .panel {
  margin: 0;
  padding: 0;
}

.modal .modal-content {
  background: #eee;
}

.modal input.form-control, 
.modal select.form-control, 
.modal .select2-container--default .select2-selection--single,
.modal .select2-container .select2-choice
{ 
  background: rgba(0, 0, 0, .1);
  line-height:20px;
  height: 46px;
  border-radius: 4px;
  border: 1px solid rgb(223, 215, 202);
}

.modal textarea {
  background: rgb(248, 245, 240);
  border-radius: 4px;
  border: 1px solid rgb(223, 215, 202);
}

.modal .form-control[disabled]{
  background: rgba(62, 63, 58, .6);
  border: 1px solid rgb(223, 215, 202);
}

label {
  font-weight:bold;
  font-size: 1em;
}
</style>

<script>

  $('[data-toggle="tooltip"]').tooltip();

  
  $('.select').select2({
    placeholder: 'Select...',
    width: '100%' 
  });

</script>

