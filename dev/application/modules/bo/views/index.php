<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>

        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }



        </style>
<!--        <script type="text/javascript">
            var demo;
            $("document").ready(function () {

                $('#answer_text_1_field_box').hide();
                $('#answer_text_2_field_box').hide();
                $('#answer_text_3_field_box').hide();
                $('#answer_text_4_field_box').hide();
                $('#answer_text_5_field_box').hide();
                $('#answer_text_6_field_box').hide();


                $('select[name="answer_num"]').on('change', function () {
                    var i = 0;
                    for (i = 0; i <= 6; i++) {
                        $('#answer_text_' + i + '_field_box').hide();
                    }

                    for (i = 0; i <= $(this).attr('value'); i++) {
                        $('#answer_text_' + i + '_field_box').show();
                    }

                });

                $('.viewAnswers').click(function () {

                    //$('#myModal').modal('show');

                    var urlInfo = base_url + "adminbo/showgetAnswers/" + $(this).attr('data-id');

                    console.log(urlInfo);

                    $(".modal-body").load(urlInfo, function () {

                        $('#myModal').modal({
                            show: true,
                            keyboard: false,
                            backdrop: 'static'
                        });

                    });
                });

                console.log(window.location.href);
                if (/answer_managament/.test(window.location.href)) {
                    $(".datatables-add-button").hide();
                    if (/add/.test(window.location.href)) {
                        $("#form-button-save").hide();


                        $('#cancel-button').click(function () {
                            window.location.href = base_url + "/adminbo/questions_managament/" +<?php echo $this->session->userdata('quiz') ?>;
                        });

                        ("#save-and-go-back-button").click(function () {
                            window.location.href = base_url + "/adminbo/questions_managament/" +<?php echo $this->session->userdata('quiz') ?>;
                        });
                    }
                    if (/edit/.test(window.location.href)) {

                        for (i = 0; i <= $('#field-answer_num option:selected').text(); i++) {
                            $('#answer_text_' + i + '_field_box').show();
                        }

                        $("#form-button-save").hide();
                    }
                }
            });

        </script>-->
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12">

                <!--<div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
                </div>-->
            </div>
        </div><!-- /.row -->
        <h4><?php echo $this->session->userdata('seccion'); ?></h4>
        <div>
            <?php echo $output; ?>
        </div>

        <script type="text/javascript">
            var demo;

            $("document").ready(function () {

                $('.modalIda').click(function () {
                    //$('#myModal').modal('show');
                    var id = $(this).attr('data-id');
                    var urlInfo = base_url+"bo/loadMap/"+id;
                    
                    $(".modal-body").load(urlInfo, function () {
                        $('#myModal').modal({ show: true, keyboard: false, backdrop: 'static' });

                    });
                });

            });

        </script>



        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
