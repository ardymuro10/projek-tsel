<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            // $table->unik();
            // $table->unik_krdnt();
            // $table->id_site();
            // $table->site_name();
            // $table->lat();
            // $table->long();
            // $table->sp_prog_jpp();
            // $table->objective();
            // $table->sow();
            // $table->prog_jpp();
            // $table->prog_jppsimple();
            // $table->jpp_part();
            // $table->remark_jpp();
            // $table->cek_lat();
            // $table->cek_long();
            // $table->infra_type();
            // $table->site_id_tp();
            // $table->plan_tower_prov();
            // $table->tower_hg();
            // $table->isd_totsel();
            // $table->isd_cattotsel();
            // $table->site_terdekat();
            // $table->isd_totp();
            // $table->isd_cattotp();
            // $table->tp_id();
            // $table->tp_name();
            // $table->tower_hgview();
            // $table->isd_tocomp();
            // $table->isd_cattocomp();
            // $table->kompet();
            // $table->isd_usuljpp();
            // $table->isd_cat();
            // $table->site_name();
            // $table->luas_hh();
            // $table->cat_hh();
            // $table->mrbad();
            // $table->mrgood();
            // $table->total();
            // $table->per_badmr();
            // $table->mr_4gcov();
            // $table->branch();
            // $table->cluster();
            // $table->do();
            // $table->id_desa();
            // $table->nama_desa();
            // $table->nama_kec();
            // $table->nama_pul();
            // $table->nama_kab();
            // $table->reg_rev_proj();
            // $table->kom_rev();
            // $table->rev_cat_pr();
            // $table->up_regrev();
            // $table->rev_predsifa();
            // $table->rem_revsifa();
            // $table->pot_nsbranch();
            // $table->arpu_kec();
            // $table->rank_perns();
            // $table->prior_srm();
            // $table->rank_reg();
            // $table->rank_rtpe();
            // $table->prior_finreg();
            // $table->pre_surveipot();
            // $table->pln();
            // $table->ass_los();
            // $table->siteid_farend();
            // $table->configfe();
            // $table->min_los();
            // $table->simple_trans();
            // $table->ur_kandidat();
            // $table->lat_kandidat();
            // $table->lon_kandidat();
            // $table->dist_tonom();
            // $table->sa_potcomm();
            // $table->prop_rf();
            // $table->alamat();
            // $table->azimuth();
            // $table->tipe_rf();
            // $table->tipe_rru();
            // $table->m_tilt();
            // $table->e_tilt();
            // $table->jum_sector();
            // $table->siteid_fe();
            // $table->sitename_fe();
            // $table->lat_fe();
            // $table->lon_fe();
            // $table->tp();
            // $table->tower_hghtfe();
            // $table->path();
            // $table->azimuth_ne();
            // $table->freq();
            // $table->diameter_antnefe();
            // $table->ant_nefe();
            // $table->min_losnefe();
            // $table->los_nlos();
            // $table->remark();
            // $table->no_komkkst();
            // $table->tp_komkkst();
            // $table->tgl_kom();
            // $table->tgl_drm();
            // $table->tgl_edrm();
            // $table->drm_stts();
            // $table->cp_eqp();
            // $table->pre_sales();
            // $table->aging();
            // $table->batch_final();
            // $table->prog_sim();
            // $table->need_supp();
            // $table->detail_prog();
            // $table->need_form();
            // $table->remark_rep();
            // $table->feed_sales();
            // $table->feed_ns();
            // $table->prior_ns();
            // $table->remark_ns();
            // $table->update_by();
            // $table->remark_csodp();
            // $table->remark_prog();
            // $table->last_miles();
            // $table->stts_fbshare();
            // $table->in_out();
            // $table->cek_duplikat();
            // $table->remark_akhir();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
};
