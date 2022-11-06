<style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  
 
  text-align:center;
}
th,td{font-size:11px;text-align:center;}
.zoom {
  /*padding: 50px;*/
  
  transition: transform .2s; /* Animation */
 /* width: 200px;*/
 /* height: 200px;
  margin: 0 auto;*/
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
@keyframes up-right {
    0% {
        transform: scale(1);
        opacity: .25
    }
    50% {
        transform: scale (1, 5);
        opacity: 1;
    }
    100% {
        transform: scale(1);
        opacity: .25;
    }
}
.circle {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    /*opacity: .25;*/
}
.red {
    background-color: red;
   /* position: absolute;*/
    top: 50%;
    left: 50%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
.yellow {
    background-color: yellow;
    /*position: absolute;*/
    top: 50%;
    left: 50%;
    -webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;
}
.green {
    background-color: green;
   /* position: absolute;*/
    top: 50%;
    left: 50%;
    /*-webkit-animation: up-right 1s infinite;
    -moz-animation: up-right 1s infinite;
    -o-animation: up-right 1s infinite;
    animation: up-right 1s infinite;*/
}

</style>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      
        
		

      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
      
          <div class="row">
           
            <!-- /.col -->

            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Buyer Wise Certificate Info</h3>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<?php if($responce = $this->session->flashdata('Successfully')): ?>
								<div class="text-center">
									<div class="alert alert-success text-center"><?php echo $responce;?></div>
								</div>
							<?php endif;?>
						</div>
					</div>
              
                </div>
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            <?php
				$aflarr = array();
				$aflfactoryid = array();
				$aflbuyername = array();
				$aflmo = array();
				$afllicense_name = array();
				$aflissuedate = array();
				$aflrenewaldate = array();
				$aflprocessingtime = array();
				$aflstatus = array();
				$aflfile = array();
				$aklarr = array();
				$aklfactoryid = array();
				$aklbuyername = array();
				$aklmo = array();
				$akllicense_name = array();
				$aklissuedate = array();
				$aklrenewaldate = array();
				$aklprocessingtime = array();
				$aklstatus = array();
				$aklfile = array();
				$atlarr = array();
				$atlfactoryid = array();
				$atlbuyername = array();
				$atlmo = array();
				$atllicense_name = array();
				$atlissuedate = array();
				$atlrenewaldate = array();
				$atlprocessingtime = array();
				$atlstatus = array();
				$atlfile = array();
				$bclarr = array();
				$bclfactoryid = array();
				$bclbuyername = array();
				$bclmo = array();
				$bcllicense_name = array();
				$bclissuedate = array();
				$bclrenewaldate = array();
				$bclprocessingtime = array();
				$bclstatus = array();
				$bclfile = array();
				$bglarr = array();
				$bglfactoryid = array();
				$bglbuyername = array();
				$bglmo = array();
				$bgllicense_name = array();
				$bglissuedate = array();
				$bglrenewaldate = array();
				$bglprocessingtime = array();
				$bglstatus = array();
				$bglfile = array();
				$bplarr = array();
				$bplfactoryid = array();
				$bplbuyername = array();
				$bplmo = array();
				$bpllicense_name = array();
				$bplissuedate = array();
				$bplrenewaldate = array();
				$bplprocessingtime = array();
				$bplstatus = array();
				$bplfile = array();
				$btlarr = array();
				$btlfactoryid = array();
				$btlbuyername = array();
				$btlmo = array();
				$btllicense_name = array();
				$btlissuedate = array();
				$btlrenewaldate = array();
				$btlprocessingtime = array();
				$btlstatus = array();
				$btlfile = array();
				$bwlarr = array();
				$bwlfactoryid = array();
				$bwlbuyername = array();
				$bwlmo = array();
				$bwllicense_name = array();
				$bwlissuedate = array();
				$bwlrenewaldate = array();
				$bwlprocessingtime = array();
				$bwlstatus = array();
				$bwlfile = array();
				$jelarr = array();
				$jelfactoryid = array();
				$jelbuyername = array();
				$jelmo = array();
				$jellicense_name = array();
				$jelissuedate = array();
				$jelrenewaldate = array();
				$jelprocessingtime = array();
				$jelstatus = array();
				$jelfile = array();
				foreach($afl as $row)
					{
						array_push($aflfactoryid,$row['factoryid']);
						array_push($aflbuyername,$row['buyername']);
						array_push($aflmo,$row['mo']);
						array_push($afllicense_name,$row['license_name']);
						array_push($aflissuedate,$row['issuedate']);
						array_push($aflrenewaldate,$row['renewaldate']);
						if (!isset($aflarr[$row['license_name']])) 
							{
                				$aflarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$aflarr[$row['license_name']]['printed'] = 'no';
            			$aflarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($akl as $row)
					{
						array_push($aklfactoryid,$row['factoryid']);
						array_push($aklbuyername,$row['buyername']);
						array_push($aklmo,$row['mo']);
						array_push($akllicense_name,$row['license_name']);
						array_push($aklissuedate,$row['issuedate']);
						array_push($aklrenewaldate,$row['renewaldate']);
						if (!isset($aklarr[$row['license_name']])) 
							{
                				$aklarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$aklarr[$row['license_name']]['printed'] = 'no';
            			$aklarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($atl as $row)
					{
						array_push($atlfactoryid,$row['factoryid']);
						array_push($atlbuyername,$row['buyername']);
						array_push($atlmo,$row['mo']);
						array_push($atllicense_name,$row['license_name']);
						array_push($atlissuedate,$row['issuedate']);
						array_push($atlrenewaldate,$row['renewaldate']);
						if (!isset($atlarr[$row['license_name']])) 
							{
                				$atlarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$atlarr[$row['license_name']]['printed'] = 'no';
            			$atlarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($bcl as $row)
					{
						array_push($bclfactoryid,$row['factoryid']);
						array_push($bclbuyername,$row['buyername']);
						array_push($bclmo,$row['mo']);
						array_push($bcllicense_name,$row['license_name']);
						array_push($bclissuedate,$row['issuedate']);
						array_push($bclrenewaldate,$row['renewaldate']);
						if (!isset($bclarr[$row['license_name']])) 
							{
                				$bclarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$bclarr[$row['license_name']]['printed'] = 'no';
            			$bclarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($bgl as $row)
					{
						array_push($bglfactoryid,$row['factoryid']);
						array_push($bglbuyername,$row['buyername']);
						array_push($bglmo,$row['mo']);
						array_push($bgllicense_name,$row['license_name']);
						array_push($bglissuedate,$row['issuedate']);
						array_push($bglrenewaldate,$row['renewaldate']);
						if (!isset($bglarr[$row['license_name']])) 
							{
                				$bglarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$bglarr[$row['license_name']]['printed'] = 'no';
            			$bglarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($bpl as $row)
					{
						array_push($bplfactoryid,$row['factoryid']);
						array_push($bplbuyername,$row['buyername']);
						array_push($bplmo,$row['mo']);
						array_push($bpllicense_name,$row['license_name']);
						array_push($bplissuedate,$row['issuedate']);
						array_push($bplrenewaldate,$row['renewaldate']);
						if (!isset($bplarr[$row['license_name']])) 
							{
                				$bplarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$bplarr[$row['license_name']]['printed'] = 'no';
            			$bplarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($btl as $row)
					{
						array_push($btlfactoryid,$row['factoryid']);
						array_push($btlbuyername,$row['buyername']);
						array_push($btlmo,$row['mo']);
						array_push($btllicense_name,$row['license_name']);
						array_push($btlissuedate,$row['issuedate']);
						array_push($btlrenewaldate,$row['renewaldate']);
						if (!isset($btlarr[$row['license_name']])) 
							{
                				$btlarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$btlarr[$row['license_name']]['printed'] = 'no';
            			$btlarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($bwl as $row)
					{
						array_push($bwlfactoryid,$row['factoryid']);
						array_push($bwlbuyername,$row['buyername']);
						array_push($bwlmo,$row['mo']);
						array_push($bwllicense_name,$row['license_name']);
						array_push($bwlissuedate,$row['issuedate']);
						array_push($bwlrenewaldate,$row['renewaldate']);
						if (!isset($bwlarr[$row['license_name']])) 
							{
                				$bwlarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$bwlarr[$row['license_name']]['printed'] = 'no';
            			$bwlarr[$row['license_name']]['rowspan'] += 1;
					}
				foreach($jel as $row)
					{
						array_push($jelfactoryid,$row['factoryid']);
						array_push($jelbuyername,$row['buyername']);
						array_push($jelmo,$row['mo']);
						array_push($jellicense_name,$row['license_name']);
						array_push($jelissuedate,$row['issuedate']);
						array_push($jelrenewaldate,$row['renewaldate']);
						if (!isset($jelarr[$row['license_name']])) 
							{
                				$jelarr[$row['license_name']]['rowspan'] = 0;
            				}
            			$jelarr[$row['license_name']]['printed'] = 'no';
            			$jelarr[$row['license_name']]['rowspan'] += 1;
					}
				echo "<table id='tableData' class='table table-hover table-bordered'>
						<thead style='background:#91b9e6;'>
                			<tr>
                    			<th>License Name</th>
								<th>Factory ID</th>
								<th>Buyer Name</th>
								<th>M/O</th>
								<th>Issue Date</th>
								<th>Renewal Date</th>
								<th>Remaining Day</th>
               		 		</tr>
						</thead>";
						for($i=0; $i < sizeof($aflbuyername); $i++) 
							{
            					$afllicense = $afllicense_name[$i];
            					echo "<tr>";
								if ($aflarr[$afllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$aflarr[$afllicense]['rowspan']."'>".$afllicense."</td>";
                						$aflarr[$afllicense]['printed'] = 'no';
            						}
								if ($aflarr[$afllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$aflarr[$afllicense]['rowspan']."'>".$aflfactoryid[$i]."</td>";
                						$aflarr[$afllicense]['printed'] = 'no';
            						}
            					echo "<td>".$aflbuyername[$i]."</td>";
								if($aflmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($aflarr[$afllicense]['printed'] == 'no') 
									{
                						$aflissuedate[$i] = date("d-m-Y", strtotime($aflissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$aflarr[$afllicense]['rowspan']."'>".$aflissuedate[$i]."</td>";
                						$aflarr[$afllicense]['printed'] = 'no';
            						}
								if ($aflarr[$afllicense]['printed'] == 'no') 
									{
                						$aflrenewaldate[$i] = date("d-m-Y", strtotime($aflrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$aflarr[$afllicense]['rowspan']."'>".$aflrenewaldate[$i]."</td>";
                						$aflarr[$afllicense]['printed'] = 'no';
            						}
								if ($aflarr[$afllicense]['printed'] == 'no') 
									{
                						$aflnow = time(); // or your date as well
										$aflrenewaldate[$i] = strtotime($aflrenewaldate[$i]);
										$afldatediff[$i] = $aflrenewaldate[$i]-$aflnow;
										$aflremain[$i]=round($afldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$aflarr[$afllicense]['rowspan']."'>".$aflremain[$i]."</td>";
                						$aflarr[$afllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//AKL//
							for($i=0; $i < sizeof($aklbuyername); $i++) 
							{
            					$akllicense = $akllicense_name[$i];
            					echo "<tr>";
								if ($aklarr[$akllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$aklarr[$akllicense]['rowspan']."'>".$akllicense."</td>";
                						$aklarr[$akllicense]['printed'] = 'no';
            						}
								if ($aklarr[$akllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$aklarr[$akllicense]['rowspan']."'>".$aklfactoryid[$i]."</td>";
                						$aklarr[$akllicense]['printed'] = 'no';
            						}
            					echo "<td>".$aklbuyername[$i]."</td>";
								if($aklmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($aklarr[$akllicense]['printed'] == 'no') 
									{
                						$aklissuedate[$i] = date("d-m-Y", strtotime($aklissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$aklarr[$akllicense]['rowspan']."'>".$aklissuedate[$i]."</td>";
                						$aklarr[$akllicense]['printed'] = 'no';
            						}
								if ($aklarr[$akllicense]['printed'] == 'no') 
									{
                						$aklrenewaldate[$i] = date("d-m-Y", strtotime($aklrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$aklarr[$akllicense]['rowspan']."'>".$aklrenewaldate[$i]."</td>";
                						$aklarr[$akllicense]['printed'] = 'no';
            						}
								if ($aklarr[$akllicense]['printed'] == 'no') 
									{
                						$aklnow = time(); // or your date as well
										$aklrenewaldate[$i] = strtotime($aklrenewaldate[$i]);
										$akldatediff[$i] = $aklrenewaldate[$i]-$aklnow;
										$aklremain[$i]=round($akldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$aklarr[$akllicense]['rowspan']."'>".$aklremain[$i]."</td>";
                						$aklarr[$akllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//ATL//
							for($i=0; $i < sizeof($atlbuyername); $i++) 
							{
            					$atllicense = $atllicense_name[$i];
            					echo "<tr>";
								if ($atlarr[$atllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$atlarr[$atllicense]['rowspan']."'>".$atllicense."</td>";
                						$atlarr[$atllicense]['printed'] = 'no';
            						}
								if ($atlarr[$atllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$atlarr[$atllicense]['rowspan']."'>".$atlfactoryid[$i]."</td>";
                						$atlarr[$atllicense]['printed'] = 'no';
            						}
            					echo "<td>".$atlbuyername[$i]."</td>";
								if($atlmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($atlarr[$atllicense]['printed'] == 'no') 
									{
                						$atlissuedate[$i] = date("d-m-Y", strtotime($atlissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$atlarr[$atllicense]['rowspan']."'>".$atlissuedate[$i]."</td>";
                						$atlarr[$atllicense]['printed'] = 'no';
            						}
								if ($atlarr[$atllicense]['printed'] == 'no') 
									{
                						$atlrenewaldate[$i] = date("d-m-Y", strtotime($atlrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$atlarr[$atllicense]['rowspan']."'>".$atlrenewaldate[$i]."</td>";
                						$atlarr[$atllicense]['printed'] = 'no';
            						}
								if ($atlarr[$atllicense]['printed'] == 'no') 
									{
                						$atlnow = time(); // or your date as well
										$atlrenewaldate[$i] = strtotime($atlrenewaldate[$i]);
										$atldatediff[$i] = $atlrenewaldate[$i]-$atlnow;
										$atlremain[$i]=round($atldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$atlarr[$atllicense]['rowspan']."'>".$atlremain[$i]."</td>";
                						$atlarr[$atllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//BCL//
							for($i=0; $i < sizeof($bclbuyername); $i++) 
							{
            					$bcllicense = $bcllicense_name[$i];
            					echo "<tr>";
								if ($bclarr[$bcllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$bclarr[$bcllicense]['rowspan']."'>".$bcllicense."</td>";
                						$bclarr[$bcllicense]['printed'] = 'no';
            						}
								if ($bclarr[$bcllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$bclarr[$bcllicense]['rowspan']."'>".$bclfactoryid[$i]."</td>";
                						$bclarr[$bcllicense]['printed'] = 'no';
            						}
            					echo "<td>".$bclbuyername[$i]."</td>";
								if($bclmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($bclarr[$bcllicense]['printed'] == 'no') 
									{
                						$bclissuedate[$i] = date("d-m-Y", strtotime($bclissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bclarr[$bcllicense]['rowspan']."'>".$bclissuedate[$i]."</td>";
                						$bclarr[$bcllicense]['printed'] = 'no';
            						}
								if ($bclarr[$bcllicense]['printed'] == 'no') 
									{
                						$bclrenewaldate[$i] = date("d-m-Y", strtotime($bclrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bclarr[$bcllicense]['rowspan']."'>".$bclrenewaldate[$i]."</td>";
                						$bclarr[$bcllicense]['printed'] = 'no';
            						}
								if ($bclarr[$bcllicense]['printed'] == 'no') 
									{
                						$bclnow = time(); // or your date as well
										$bclrenewaldate[$i] = strtotime($bclrenewaldate[$i]);
										$bcldatediff[$i] = $bclrenewaldate[$i]-$bclnow;
										$bclremain[$i]=round($bcldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$bclarr[$bcllicense]['rowspan']."'>".$bclremain[$i]."</td>";
                						$bclarr[$bcllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//BGL//
							for($i=0; $i < sizeof($bglbuyername); $i++) 
							{
            					$bgllicense = $bgllicense_name[$i];
            					echo "<tr>";
								if ($bglarr[$bgllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$bglarr[$bgllicense]['rowspan']."'>".$bgllicense."</td>";
                						$bglarr[$bgllicense]['printed'] = 'no';
            						}
								if ($bglarr[$bgllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$bglarr[$bgllicense]['rowspan']."'>".$bglfactoryid[$i]."</td>";
                						$bglarr[$bgllicense]['printed'] = 'no';
            						}
            					echo "<td>".$bglbuyername[$i]."</td>";
								if($bglmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$licensename[$i]."</td>";
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($bglarr[$bgllicense]['printed'] == 'no') 
									{
                						$bglissuedate[$i] = date("d-m-Y", strtotime($bglissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bglarr[$bgllicense]['rowspan']."'>".$bglissuedate[$i]."</td>";
                						$bglarr[$bgllicense]['printed'] = 'no';
            						}
								if ($bglarr[$bgllicense]['printed'] == 'no') 
									{
                						$bglrenewaldate[$i] = date("d-m-Y", strtotime($bglrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bglarr[$bgllicense]['rowspan']."'>".$bglrenewaldate[$i]."</td>";
                						$bglarr[$bgllicense]['printed'] = 'no';
            						}
								if ($bglarr[$bgllicense]['printed'] == 'no') 
									{
                						$bglnow = time(); // or your date as well
										$bglrenewaldate[$i] = strtotime($bglrenewaldate[$i]);
										$bgldatediff[$i] = $bglrenewaldate[$i]-$bglnow;
										$bglremain[$i]=round($bgldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$bglarr[$bgllicense]['rowspan']."'>".$bglremain[$i]."</td>";
                						$aflarr[$bgllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//BPL//
							for($i=0; $i < sizeof($bplbuyername); $i++) 
							{
            					$bpllicense = $bpllicense_name[$i];
            					echo "<tr>";
								if ($bplarr[$bpllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$bplarr[$bpllicense]['rowspan']."'>".$bpllicense."</td>";
                						$bplarr[$bpllicense]['printed'] = 'no';
            						}
								if ($bplarr[$bpllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$bplarr[$bpllicense]['rowspan']."'>".$bplfactoryid[$i]."</td>";
                						$bplarr[$bpllicense]['printed'] = 'no';
            						}
            					echo "<td>".$bplbuyername[$i]."</td>";
								if($bplmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($bplarr[$bpllicense]['printed'] == 'no') 
									{
                						$bplissuedate[$i] = date("d-m-Y", strtotime($bplissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bplarr[$bpllicense]['rowspan']."'>".$bplissuedate[$i]."</td>";
                						$bplarr[$bpllicense]['printed'] = 'no';
            						}
								if ($bplarr[$bpllicense]['printed'] == 'no') 
									{
                						$bplrenewaldate[$i] = date("d-m-Y", strtotime($bplrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bplarr[$bpllicense]['rowspan']."'>".$bplrenewaldate[$i]."</td>";
                						$bplarr[$bpllicense]['printed'] = 'no';
            						}
								if ($bplarr[$bpllicense]['printed'] == 'no') 
									{
                						$bplnow = time(); // or your date as well
										$bplrenewaldate[$i] = strtotime($bplrenewaldate[$i]);
										$bpldatediff[$i] = $bplrenewaldate[$i]-$bplnow;
										$bplremain[$i]=round($bpldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$bplarr[$bpllicense]['rowspan']."'>".$bplremain[$i]."</td>";
                						$bplarr[$bpllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//BTL//
							for($i=0; $i < sizeof($btlbuyername); $i++) 
							{
            					$btllicense = $btllicense_name[$i];
            					echo "<tr>";
								if ($btlarr[$btllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$btlarr[$btllicense]['rowspan']."'>".$btllicense."</td>";
                						$btlarr[$btllicense]['printed'] = 'no';
            						}
								if ($btlarr[$btllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$btlarr[$btllicense]['rowspan']."'>".$btlfactoryid[$i]."</td>";
                						$btlarr[$btllicense]['printed'] = 'no';
            						}
            					echo "<td>".$btlbuyername[$i]."</td>";
								if($btlmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($btlarr[$btllicense]['printed'] == 'no') 
									{
                						$btlissuedate[$i] = date("d-m-Y", strtotime($btlissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$btlarr[$btllicense]['rowspan']."'>".$btlissuedate[$i]."</td>";
                						$btlarr[$btllicense]['printed'] = 'no';
            						}
								if ($btlarr[$btllicense]['printed'] == 'no') 
									{
                						$btlrenewaldate[$i] = date("d-m-Y", strtotime($btlrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$btlarr[$btllicense]['rowspan']."'>".$btlrenewaldate[$i]."</td>";
                						$btlarr[$btllicense]['printed'] = 'no';
            						}
								if ($btlarr[$btllicense]['printed'] == 'no') 
									{
                						$btlnow = time(); // or your date as well
										$btlrenewaldate[$i] = strtotime($btlrenewaldate[$i]);
										$btldatediff[$i] = $btlrenewaldate[$i]-$btlnow;
										$btlremain[$i]=round($btldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$btlarr[$btllicense]['rowspan']."'>".$btlremain[$i]."</td>";
                						$btlarr[$btllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//BWL//
							for($i=0; $i < sizeof($bwlbuyername); $i++) 
							{
            					$bwllicense = $bwllicense_name[$i];
            					echo "<tr>";
								if ($bwlarr[$bwllicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$bwlarr[$bwllicense]['rowspan']."'>".$bwllicense."</td>";
                						$bwlarr[$bwllicense]['printed'] = 'no';
            						}
								if ($bwlarr[$bwllicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$bwlarr[$bwllicense]['rowspan']."'>".$bwlfactoryid[$i]."</td>";
                						$bwlarr[$bwllicense]['printed'] = 'no';
            						}
            					echo "<td>".$bwlbuyername[$i]."</td>";
								if($bwlmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($bwlarr[$bwllicense]['printed'] == 'no') 
									{
                						$bwlissuedate[$i] = date("d-m-Y", strtotime($bwlissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bwlarr[$bwllicense]['rowspan']."'>".$bwlissuedate[$i]."</td>";
                						$bwlarr[$bwllicense]['printed'] = 'no';
            						}
								if ($bwlarr[$bwllicense]['printed'] == 'no') 
									{
                						$bwlrenewaldate[$i] = date("d-m-Y", strtotime($bwlrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$bwlarr[$bwllicense]['rowspan']."'>".$bwlrenewaldate[$i]."</td>";
                						$bwlarr[$bwllicense]['printed'] = 'no';
            						}
								if ($bwlarr[$bwllicense]['printed'] == 'no') 
									{
                						$bwlnow = time(); // or your date as well
										$bwlrenewaldate[$i] = strtotime($bwlrenewaldate[$i]);
										$bwldatediff[$i] = $bwlrenewaldate[$i]-$bwlnow;
										$bwlremain[$i]=round($bwldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$bwlarr[$bwllicense]['rowspan']."'>".$bwlremain[$i]."</td>";
                						$bwlarr[$bwllicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
							//JEL//
							for($i=0; $i < sizeof($jelbuyername); $i++) 
							{
            					$jellicense = $jellicense_name[$i];
            					echo "<tr>";
								if ($jelarr[$jellicense]['printed'] == 'no') 
									{
               							echo "<td style='vertical-align:middle;' rowspan='".$jelarr[$jellicense]['rowspan']."'>".$jellicense."</td>";
                						$jelarr[$jellicense]['printed'] = 'no';
            						}
								if ($jelarr[$jellicense]['printed'] == 'no') 
									{
                						echo "<td style='vertical-align:middle;' rowspan='".$jelarr[$jellicense]['rowspan']."'>".$jelfactoryid[$i]."</td>";
                						$jelarr[$jellicense]['printed'] = 'no';
            						}
            					echo "<td>".$jelbuyername[$i]."</td>";
								if($jelmo[$i]==1)
								{
									echo "<td>Major</td>";
								}
								else
								{
									echo "<td>Optional</td>";
								}
								//echo "<td>".$issuedate[$i]."</td>";
								//echo "<td>".$renewaldate[$i]."</td>";
								if ($jelarr[$jellicense]['printed'] == 'no') 
									{
                						$jelissuedate[$i] = date("d-m-Y", strtotime($jelissuedate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$jelarr[$jellicense]['rowspan']."'>".$jelissuedate[$i]."</td>";
                						$jelarr[$jellicense]['printed'] = 'no';
            						}
								if ($jelarr[$jellicense]['printed'] == 'no') 
									{
                						$jelrenewaldate[$i] = date("d-m-Y", strtotime($jelrenewaldate[$i]));
										echo "<td style='vertical-align:middle;' rowspan='".$jelarr[$jellicense]['rowspan']."'>".$jelrenewaldate[$i]."</td>";
                						$jelarr[$jellicense]['printed'] = 'no';
            						}
								if ($jelarr[$jellicense]['printed'] == 'no') 
									{
                						$jelnow = time(); // or your date as well
										$jelrenewaldate[$i] = strtotime($jelrenewaldate[$i]);
										$jeldatediff[$i] = $jelrenewaldate[$i]-$jelnow;
										$jelremain[$i]=round($jeldatediff[$i] / (60 * 60 * 24));
										echo "<td style='vertical-align:middle;' rowspan='".$jelarr[$jellicense]['rowspan']."'>".$jelremain[$i]."</td>";
                						$jelarr[$jellicense]['printed'] = 'yes';
            						}
            					echo "</tr>";
        					}
						echo "</table>";
			?>
        
      
		
             	
            </div>
            
            <!-- /.box-body -->
          </div>
          
                
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->

</body>
</html>
