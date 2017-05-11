<div id="last-member" class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop" >
  <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
    <h2 class="mdl-card__title-text" >Last Member Registered</h2>
  </div>
  <div class="mdl-card__supporting-text mdl-color-text--grey-600">
  <p><span>Name:</span>  <?php echo $getLastMember["name"]; ?></p>
  <p><span>Phone:</span>  <?php echo $getLastMember["phone"]; ?></p>
  <p><span>Profession:</span>  <?php echo $getLastMember["profession"]; ?></p>
  <p><span>Date:</span>  <?php  echo $getLastMember["SUBSTR(created,1,10)"]; ?></p>
  </div>
</div>


<div id="chart" class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
      
      <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast" style="padding-left:15px;">Summary</div>
          <div class="android-card-container mdl-grid">
          
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="../../images/more-from-1.png" height="264" width="380">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Total Number of New Comers</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead" style="font-size:64px"><?php echo $visitorNum; ?></span>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="../../images/more-from-4.png" height="264" width="380">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Total Number of New Comers in current month</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead" style="font-size:64px"><?php echo $visitorNumCurMon; ?></span>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="../../images/more-from-2.png" height="264" width="380">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Total Number of partners registered</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead" style="font-size:64px"><?php echo $partnerNum; ?></span>
              </div>
            </div>
          </div>
        </div>
</div>