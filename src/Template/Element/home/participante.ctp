<?php
  $id = md5($name);
?>
<div class="col-md-4">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="thumbnail attraction">
        <img src="img/participantes_<?= $year ?>/<?= $photo ?>" alt="" class="img-rounded img-responsive">
        <div class="caption text-center">
          <h4>
            <?= $name ?><br>
            <small><?= $company ?></small>
          </h4>
          <h5 class="text-center more">
            <a href="#" data-toggle="modal" data-target="#modal_<?= $id ?>"><span class="fa fa-plus-square"></span> Saiba mais</a>
          </h5>
          <div class="modal fade" id="modal_<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="pablo_title">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="pablo_title"><?= $name ?></h4>
                </div>
                <div class="modal-body">
                  <?php foreach ($about as $title => $text): ?>
                    <p>Sobre <strong><?= $title ?></strong></p>
                    <p>
                      <?= $text ?>
                    </p>
                  <?php endforeach ?>
                  <?php if (isset($activities)): ?>
                    <?php foreach ($activities as $activity): ?>
                      <p>
                        <?= $activity['type'] ?>: <strong><?= $activity['title'] ?></strong>
                      </p>
                      <p>
                        <?= $activity['desc'] ?>
                      </p>
                    <?php endforeach ?>
                  <?php elseif (isset($activity)): ?>
                    <p>
                      <?= $activity['type'] ?>: <strong><?= $activity['title'] ?></strong>
                    </p>
                    <p>
                      <?= $activity['desc'] ?>
                    </p>
                  <?php endif ?>

                  <hr>

                  <?php if (isset($sites)): ?>
                    <p>
                    <?php foreach ($sites as $site): ?>
                        Site: <a href="<?= $site['url'] ?>" target="_blank"><?= isset($site['title']) ? $site['title'] : $site['url'] ?></a>
                        <br>
                      <?php endforeach ?>
                    </p>
                  <?php elseif (isset($site)): ?>
                    <p>
                      Site: <a href="<?= $site['url'] ?>" target="_blank"><?= isset($site['title']) ? $site['title'] : $site['url'] ?></a>
                    </p>
                  <?php endif ?>

                  <?php if (isset($email)): ?>
                    <p><i class="fa fa-envelope"></i> <?= $email ?></p>
                  <?php endif ?>

                  <?php if (isset($social)): ?>
                    <ul class="list-unstyled">
                      <?php foreach ($social as $type => $socialLink): ?>
                        <li>
                          <a href="<?= $socialLink['url'] ?>" target="_blank">
                            <i class="fa fa-<?= $type ?>"></i> <?= $socialLink['title'] ?>
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>