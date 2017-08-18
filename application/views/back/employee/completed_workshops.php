<!-- ******Features Section****** -->       
        <section class="features-tabbed section">
            <div class="container"><br>
                <h2 class="page-title text-center"><i class="fa fa-archive"></i> Completed Workshops</h2><br><br>
                <div class="row">
                    <div class="blog-list blog-category-list">
                        <article>
                            <div class="col-md-12 col-sm-12">
                                <table class="table table-bordered table-hover" id="table_completed_workshops">
                                <thead>
                                    <tr class="active">
                                        <th>Workshop</th> 
                                        <th>Institution</th>
                                        <th width="160">Credit hours</th>
                                        <th width="160">Certificates</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <?php
                                    if (is_array($workshops)) {
                                      foreach($workshops as $i => $workshop)
                                      {
                                        ?>

                                    <tr>
                                        <td><a><?=$workshop->name?></a></td> 
                                        <td><?=$vendors[$i]->name?></td>
                                        <td><?=$workshop->hours?></td>
                                        <td>
                                         <a class="btn btn-success btn-lg" href="<?= base_url().$certifications[$i]->path ?>" download> View </a>
                                        </td>
                                    </tr>

                                    <?php
                                      }
                                  }
                                      ?>
                                                                                   
                                   
                                </tbody> 
                                </table>
                            </div>
                            <!--<div class="pagination-container text-center">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>-->
                        </article>                  
                    </div><!--//blog-list--> 
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//features-tabbed-->       
    </div><!--//wrapper-->
