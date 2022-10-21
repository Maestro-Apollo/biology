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

            $sql = "SELECT count(*) as total from scientific_tbl where scientific_name	like '%$tag%'
            or	taxonomy_id	like '%$tag%'
            or	`rank`	like '%$tag%'
            or	domain	like '%$tag%'
            or	eukarya_type	like '%$tag%'
            or	type_fungi	like '%$tag%'
            or	lichen	like '%$tag%'
            or	type_algae	like '%$tag%'
            or	diatom	like '%$tag%'
            or	microbiome	like '%$tag%'
            or	microbiome_water	like '%$tag%'
            or	microbiome_water_fresh	like '%$tag%'
            or	microbiome_water_fresh_wetland	like '%$tag%'
            or	microbiome_water_marine	like '%$tag%'
            or	microbiome_water_sediment	like '%$tag%'
            or	microbiome_soil	like '%$tag%'
            or	microbiome_soil_type	like '%$tag%'
            or	microbiome_extreme	like '%$tag%'
            or	euk_algae_metabolism	like '%$tag%'
            or	euk_growth	like '%$tag%'
            or	euk_lifestyle	like '%$tag%'
            or	euk_lifestyle_benthic	like '%$tag%'
            or	euk_morphology	like '%$tag%'
            or	euk_symmetry	like '%$tag%'
            or	euk_secondary_structure	like '%$tag%'
            or	euk_secondary_structure_type	like '%$tag%'
            or	euk_pigmentation	like '%$tag%'
            or	euk_pigmentation_type	like '%$tag%'
            or	euk_locomotion	like '%$tag%'
            or	euk_locomotion_structure	like '%$tag%'
            or	biofilm_forming	like '%$tag%'
            or	extremophile	like '%$tag%'
            or	extremophile_type	like '%$tag%'
            or	euk_reproduction	like '%$tag%'
            or	spore_forming	like '%$tag%'
            or	euk_symbiosis	like '%$tag%'
            or	euk_symbiosis_host	like '%$tag%'
            or	pathogen	like '%$tag%'
            or	pathogen_host	like '%$tag%'
            or	euk_antagonism	like '%$tag%'
            or	euk_antagonism_type	like '%$tag%'
            or	euk_content_production	like '%$tag%'
            or	euk_content_list	like '%$tag%'
            or	euk_uv_resistant	like '%$tag%'
            or	euk_uv_resistant_list	like '%$tag%'
            or	euk_toxin	like '%$tag%'
            or	euk_toxin_type	like '%$tag%'
            or	metabolism	like '%$tag%'
            or	metabolism_energy	like '%$tag%'
            or	metabolism_electron_source	like '%$tag%'
            or	metabolism_carbon_source	like '%$tag%'
            or	microbiome_host	like '%$tag%'
            or	microbiome_host_human	like '%$tag%'
            or	pathogen_host_human	like '%$tag%'
            or	antimicrobial_activity	like '%$tag%'
            or	bac_oxygen_use	like '%$tag%'
            or	bac_gram_stain	like '%$tag%'
            or	virus_genome	like '%$tag%'
            or	virus_strand	like '%$tag%'
            or	virus_strand_sense	like '%$tag%'
            or	virus_capsid	like '%$tag%'
            or	virus_capsid_symmetry	like '%$tag%'
            or	reference	like '%$tag%'
            or	volunteer_name	like '%$tag%'
            ";
            $res = mysqli_query($this->link, $sql);
            $arr = array();
            if ($res) {
                foreach ($res as $row) {
                    $arr[] = $row;
                }
                return json_encode($arr);
            } else {
                return '';
            }
        }
    }
}
$obj = new Details;
echo $obj->showDetails();