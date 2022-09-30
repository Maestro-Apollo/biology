<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");
include('../class/database.php');
class Details extends database
{
    public function showDetails()
    {
        if (isset($_POST['tag'])) {
            $tag = addslashes(trim($_POST['tag']));

            $sql = "SELECT * from scientific_tbl where scientific_name	= '$tag'
            or	taxonomy_id	= '$tag'
            or	`rank`	= '$tag'
            or	domain	= '$tag'
            or	eukarya_type	= '$tag'
            or	type_fungi	= '$tag'
            or	lichen	= '$tag'
            or	type_algae	= '$tag'
            or	diatom	= '$tag'
            or	microbiome	= '$tag'
            or	microbiome_water	= '$tag'
            or	microbiome_water_fresh	= '$tag'
            or	microbiome_water_fresh_wetland	= '$tag'
            or	microbiome_water_marine	= '$tag'
            or	microbiome_water_sediment	= '$tag'
            or	microbiome_soil	= '$tag'
            or	microbiome_soil_type	= '$tag'
            or	microbiome_extreme	= '$tag'
            or	euk_algae_metabolism	= '$tag'
            or	euk_growth	= '$tag'
            or	euk_lifestyle	= '$tag'
            or	euk_lifestyle_benthic	= '$tag'
            or	euk_morphology	= '$tag'
            or	euk_symmetry	= '$tag'
            or	euk_secondary_structure	= '$tag'
            or	euk_secondary_structure_type	= '$tag'
            or	euk_pigmentation	= '$tag'
            or	euk_pigmentation_type	= '$tag'
            or	euk_locomotion	= '$tag'
            or	euk_locomotion_structure	= '$tag'
            or	biofilm_forming	= '$tag'
            or	extremophile	= '$tag'
            or	extremophile_type	= '$tag'
            or	euk_reproduction	= '$tag'
            or	spore_forming	= '$tag'
            or	euk_symbiosis	= '$tag'
            or	euk_symbiosis_host	= '$tag'
            or	pathogen	= '$tag'
            or	pathogen_host	= '$tag'
            or	euk_antagonism	= '$tag'
            or	euk_antagonism_type	= '$tag'
            or	euk_content_production	= '$tag'
            or	euk_content_list	= '$tag'
            or	euk_uv_resistant	= '$tag'
            or	euk_uv_resistant_list	= '$tag'
            or	euk_toxin	= '$tag'
            or	euk_toxin_type	= '$tag'
            or	metabolism	= '$tag'
            or	metabolism_energy	= '$tag'
            or	metabolism_electron_source	= '$tag'
            or	metabolism_carbon_source	= '$tag'
            or	microbiome_host	= '$tag'
            or	microbiome_host_human	= '$tag'
            or	pathogen_host_human	= '$tag'
            or	antimicrobial_activity	= '$tag'
            or	bac_oxygen_use	= '$tag'
            or	bac_gram_stain	= '$tag'
            or	virus_genome	= '$tag'
            or	virus_strand	= '$tag'
            or	virus_strand_sense	= '$tag'
            or	virus_capsid	= '$tag'
            or	virus_capsid_symmetry	= '$tag'
            or	reference	= '$tag'
            or	volunteer_name	= '$tag'
            ";
            $res = mysqli_query($this->link, $sql);
            $arr = array();
            if (mysqli_num_rows($res) > 0) {
                foreach ($res as $row) {
                    $arr[] = $row;
                }
                return json_encode($arr);
            } else {
                return '';
            }
        } else {
            return '';
        }
    }
}
$obj = new Details;
echo $obj->showDetails();