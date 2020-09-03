<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lnc Analysis</title>


	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico"/>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/footer.css"/>
	<link rel="stylesheet" href="public/css/ico.css">
	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="echarts.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/build.css">
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	<script src="public/js/select_option.js"></script>
	<script src="public/js/select_option_2.js"></script>

	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
    <link href="css/style.css" rel="stylesheet">
<script type="text/javascript">


function mycheck()
{
if(document.getElementById("radio_text").checked && document.getElementById('input').value.length==0)
{
alert("Please Enter Lnc");
return false;
}	
else if(document.getElementById("radio_file").checked && document.getElementById('file').value.length==0)
{
alert("Please Input Your File");
return false;
}	


}	

function fileupload()
{
document.getElementById('filepath').value=document.getElementById('filename').value;
}




function forexmple()
{
document.getElementById('input').value = 'LINC01614\n' +
    'LINC00922\n' +
    'RP11-400N13.3\n' +
    'RP11-417E7.2\n' +
    'RP11-863P13.3\n' +
    'C6orf99\n' +
    'LINC01561\n' +
    'AC015849.16\n' +
    'RP11-428L9.2\n' +
    'FOXD3-AS1\n' +
    'RP11-742B18.1\n' +
    'LEF1-AS1\n' +
    'AC011893.3\n' +
    'TMPO-AS1\n' +
    'RP11-108L7.15\n' +
    'RP11-547D24.1\n' +
    'AC009133.12\n' +
    'RHPN1-AS1\n' +
    'C5orf66-AS1\n' +
    'CTD-2171N6.1\n' +
    'MUC2\n' +
    'DSCAM-AS1\n' +
    'CTD-2510F5.4\n' +
    'AC009005.2\n' +
    'RP11-542B15.1\n' +
    'MAFG-AS1\n' +
    'RP4-616B8.5\n' +
    'RP1-63M2.7\n' +
    'C2orf48\n' +
    'LINC00337\n' +
    'AC114730.3\n' +
    'RP11-429J17.7\n' +
    'LGALS8-AS1\n' +
    'RP11-196G18.22\n' +
    'RP11-122M14.1\n' +
    'LINC00466\n' +
    'AC112721.2\n' +
    'AP000251.3\n' +
    'RP11-265N7.1\n' +
    'LINC00052\n' +
    'WT1-AS\n' +
    'AGAP1-IT1\n' +
    'RP11-57A19.2\n' +
    'RP11-399C16.3\n' +
    'CTA-384D8.35\n' +
    'LA16c-380H5.1\n' +
    'AC112721.1\n' +
    'LINC00511\n' +
    'TYMSOS\n' +
    'ATP2A1-AS1\n' +
    'AP001434.2\n' +
    'RP11-865I6.2\n' +
    'CTD-2377D24.6\n' +
    'CDKN2B-AS1\n' +
    'LINC01344\n' +
    'LINC01522\n' +
    'RP11-127I20.5\n' +
    'RP11-624L4.1\n' +
    'RP11-426C22.4\n' +
    'RP11-1399P15.1\n' +
    'RP5-963E22.6\n' +
    'HOXC-AS3\n' +
    'LA16c-312E8.4\n' +
    'RP3-323A16.1\n' +
    'AC133644.2\n' +
    'RP11-98G7.1\n' +
    'RP11-92K15.3\n' +
    'RP11-443B20.1\n' +
    'RP11-731F5.2\n' +
    'RP11-429J17.5\n' +
    'RP11-347C12.10\n' +
    'C9orf163\n' +
    'RP6-65G23.3\n' +
    'RP11-783K16.13\n' +
    'PP14571\n' +
    'LINC01281\n' +
    'RP3-337H4.8\n' +
    'RP1-228H13.5\n' +
    'RP11-98D18.9\n' +
    'RP11-465N4.4\n' +
    'CTD-2396E7.11\n' +
    'MIR3150B\n' +
    'AFAP1-AS1\n' +
    'CTA-392C11.1\n' +
    'RP11-25L3.3\n' +
    'RP11-22C11.2\n' +
    'RP11-465L10.10\n' +
    'ST3GAL4-AS1\n' +
    'CTB-49A3.4\n' +
    'RP11-295G20.2\n' +
    'RP5-1028K7.2\n' +
    'PCAT6\n' +
    'RP1-86C11.7\n' +
    'RP4-533D7.5\n' +
    'AC018816.3\n' +
    'RP11-629O1.2\n' +
    'AC017002.1\n' +
    'LINC01429\n' +
    'RP11-459E5.1\n' +
    'CTD-2529O21.1\n' +
    'SMCR2\n' +
    'LINC01224\n' +
    'RP13-463N16.6\n' +
    'RP11-567M16.2\n' +
    'RP11-909N17.2\n' +
    'RP11-303E16.2\n' +
    'WFDC21P\n' +
    'DDX11-AS1\n' +
    'RP11-806H10.4\n' +
    'LINC01605\n' +
    'RP11-738B7.1\n' +
    'RP11-135F9.4\n' +
    'RP11-146I2.1\n' +
    'AC104667.3\n' +
    'CTC-260E6.4\n' +
    'RP11-67L3.5\n' +
    'CTC-276P9.4\n' +
    'RP11-473L15.3\n' +
    'TLX1NB\n' +
    'RP11-34F20.7\n' +
    'AC114271.2\n' +
    'CTC-548K16.1\n' +
    'RP3-439F8.1\n' +
    'RUNDC3A-AS1\n' +
    'KCNH1-IT1\n' +
    'CTA-126B4.7\n' +
    'RP11-14D22.1\n' +
    'RP11-783K16.5\n' +
    'HAGLROS\n' +
    'RP11-13P5.2\n' +
    'RP11-148B18.1\n' +
    'RP11-523H20.3\n' +
    'AC012462.2\n' +
    'CTD-3001H11.2\n' +
    'CTD-3035D6.2\n' +
    'RP11-191L9.4\n' +
    'LINC00665\n' +
    'RP4-694A7.2\n' +
    'LINC00460\n' +
    'PVT1\n' +
    'RP3-395M20.12\n' +
    'CTD-2589M5.4\n' +
    'RP11-616M22.11\n' +
    'CTD-2047H16.2\n' +
    'CTB-58E17.5\n' +
    'RP11-196G18.3\n' +
    'LA16c-380H5.2\n' +
    'LINC01094\n' +
    'AC092198.1\n' +
    'AC114730.5\n' +
    'SNHG25\n' +
    'CTD-2523D13.2\n' +
    'AF015262.2\n' +
    'TONSL-AS1\n' +
    'LA16c-380H5.5\n' +
    'AC005624.2\n' +
    'RP11-127O4.3\n' +
    'RP11-357H14.17\n' +
    'MAFA-AS1\n' +
    'LINC00536\n' +
    'RP11-53B2.6\n' +
    'LINC01615\n' +
    'AP000696.2\n' +
    'AC092071.1\n' +
    'BMPR1B-AS1\n' +
    'RP13-582O9.7\n' +
    'RP11-98D18.3\n' +
    'ST8SIA6-AS1\n' +
    'SAMD12-AS1\n' +
    'MIR4435-2HG\n' +
    'RP11-676B18.1\n' +
    'KB-1440D3.13\n' +
    'AC093642.3\n' +
    'CTD-2116N20.1\n' +
    'RP11-1275H24.2\n' +
    'RP11-126H7.4\n' +
    'RP11-307C12.11\n' +
    'DLEU2\n' +
    'RP11-126K1.2\n' +
    'AC068580.6\n' +
    'HOTAIR\n' +
    'RP11-731F5.1\n' +
    'RP11-485G7.6\n' +
    'RP11-556E13.1\n' +
    'LL22NC03-75H12.2\n' +
    'CTD-2015H6.3\n' +
    'WI2-85898F10.1\n' +
    'C15orf54\n' +
    'MNX1-AS1\n' +
    'RP11-320N21.2\n' +
    'RP1-239B22.5\n' +
    'RP11-533E19.7\n' +
    'MUC19\n' +
    'RP5-908M14.10\n' +
    'LINC00940\n' +
    'GATA3-AS1\n' +
    'MIR210HG\n' +
    'LINC01117\n' +
    'RP11-53O19.1\n' +
    'RP11-53B2.5\n' +
    'RP11-423H2.3\n' +
    'RP11-161I6.2\n' +
    'TFAP2A-AS1\n' +
    'AC006486.10\n' +
    'LA16c-312E8.2\n' +
    'CTA-280A3.2\n' +
    'FBXL19-AS1\n' +
    'CTA-384D8.34\n' +
    'RP11-98D18.17\n' +
    'LINC01136\n' +
    'RP11-67L3.4\n' +
    'ELFN1-AS1\n' +
    'CTD-3065J16.9\n' +
    'RP11-579D7.4\n' +
    'CTD-2583A14.8\n' +
    'UNQ6494\n' +
    'CITF22-49D8.1\n' +
    'CTD-2008P7.8\n' +
    'RP11-649A18.5\n' +
    'RP11-114M1.2\n' +
    'RP11-353N14.4\n' +
    'AP000439.3\n' +
    'LINC01569\n' +
    'RP11-121C6.5\n' +
    'RP3-428L16.2\n' +
    'AC053503.4\n' +
    'NKILA\n' +
    'AC137932.6\n' +
    'RP11-68I3.7\n' +
    'RP11-670E13.6\n' +
    'RNF139-AS1\n' +
    'LINC00152\n' +
    'C5orf66\n' +
    'CASC16\n' +
    'RP11-353N14.2\n' +
    'CLRN1-AS1\n' +
    'RP11-10J5.1\n' +
    'RP4-673M15.1\n' +
    'LA16c-325D7.1\n' +
    'LINC01588\n' +
    'AC062028.1\n' +
    'RP11-498C9.4\n' +
    'CTD-2547L24.4\n' +
    'FLJ12825\n' +
    'RP11-634H22.1\n' +
    'GS1-393G12.14\n' +
    'RP5-1092A11.5\n' +
    'RP11-36N20.1\n' +
    'AC068580.5\n' +
    'AC145110.1\n' +
    'CTB-92J24.2\n' +
    'SRRM2-AS1\n' +
    'CTD-2562G15.3\n' +
    'TSSC1-IT1\n' +
    'RP11-5O17.1\n' +
    'TCL6\n' +
    'LINC00243\n' +
    'RP11-54O7.3\n' +
    'RP5-907D15.4\n' +
    'RP11-452I5.2\n' +
    'RP11-656D10.7\n' +
    'RP5-1185I7.1\n' +
    'CTA-384D8.36\n' +
    'AC002116.7\n' +
    'Z69720.3\n' +
    'RP11-1C8.6\n' +
    'RP11-495P10.7\n' +
    'AC068858.1\n' +
    'AP000695.4\n' +
    'PCAT29\n' +
    'U47924.29\n' +
    'RP11-380L11.4\n' +
    'RP11-22L13.1\n' +
    'RP11-872J21.3\n' +
    'RP3-340B19.3\n' +
    'PLA2G4C-AS1\n' +
    'CTD-2371O3.3\n' +
    'DLG3-AS1\n' +
    'RP11-214N9.1\n' +
    'AC007255.8\n' +
    'SMPD5\n' +
    'RP11-53O19.2\n' +
    'RP11-344P13.6\n' +
    'XXbac-BPG252P9.10\n' +
    'RP11-473M20.11\n' +
    'RP11-809O17.1\n' +
    'RP11-210M15.1\n' +
    'AC141930.2\n' +
    'RP11-53O19.3\n' +
    'UNC5B-AS1\n' +
    'RP11-982M15.6\n' +
    'RP11-132A1.4\n' +
    'RP11-616M22.7\n' +
    'RP11-304L19.12\n' +
    'CTD-2517M22.17\n' +
    'LINC00607\n' +
    'RP4-724E16.2\n' +
    'RP11-93K22.6\n' +
    'KB-1732A1.1\n' +
    'RP11-347C12.11\n' +
    'RP11-25L3.1\n' +
    'KCCAT333\n' +
    'ELFN2\n' +
    'CTB-114C7.4\n' +
    'CTD-2410N18.3\n' +
    'DNAH17-AS1\n' +
    'RP11-513N24.1\n' +
    'RP3-468B3.2\n' +
    'RP11-84A19.3\n' +
    'RP13-297E16.4\n' +
    'RP11-405M12.4\n' +
    'RP11-1C8.7\n' +
    'CTD-2561B21.5\n' +
    'WASIR2\n' +
    'RP11-150O12.3\n' +
    'RP11-77P6.2\n' +
    'MIAT\n' +
    'RP13-49I15.6\n' +
    'RP5-1184F4.7\n' +
    'RP11-932O9.10\n' +
    'RP11-53B2.4\n' +
    'SRGAP3-AS2\n' +
    'RP11-157F20.3\n' +
    'CTD-2033D15.3\n' +
    'AC061961.2\n' +
    'PCAT7\n' +
    'RP11-661A12.9\n' +
    'LINC00659\n' +
    'LA16c-380H5.6\n' +
    'AC093642.1\n' +
    'RP11-277B15.3\n' +
    'RP11-968A15.2\n' +
    'RP11-54O7.1\n' +
    'RP11-99J16__A.2\n' +
    'RP3-512B11.3\n' +
    'RP11-327E2.5\n' +
    'DEPDC1-AS1\n' +
    'KRTAP5-AS1\n' +
    'PYCARD-AS1\n' +
    'RP11-203J24.8\n' +
    'RP11-174G6.5\n' +
    'RP3-495K2.2\n' +
    'RP11-210M15.2\n' +
    'FAM83C-AS1\n' +
    'LINC00578\n' +
    'RP11-485G7.5\n' +
    'RP11-503N18.4\n' +
    'CHKB-AS1\n' +
    'C1orf220\n' +
    'RP11-146F11.5\n' +
    'RP11-254F7.4\n' +
    'RP11-707G18.1\n' +
    'U47924.27\n' +
    'RP11-346C4.3\n' +
    'GS1-279B7.2\n' +
    'RP5-908M14.5\n' +
    'RP11-44N22.3\n' +
    'LINC01096\n' +
    'RP5-908M14.9\n' +
    'CTD-2555A7.2\n' +
    'LINC01297\n' +
    'RP11-576I22.2\n' +
    'CTC-273B12.10\n' +
    'RP11-89K10.1\n' +
    'RP11-114M1.1\n' +
    'RP11-335E6.3\n' +
    'RP11-312A15.2\n' +
    'LINC01505\n' +
    'CTC-1337H24.4\n' +
    'RP11-1275H24.1\n' +
    'RP11-133K1.11\n' +
    'RP11-118A3.1\n' +
    'RP11-723O4.9\n' +
    'RP11-496I9.1\n' +
    'RP11-12L8.1\n' +
    'FUT8-AS1\n' +
    'CTD-2033D15.2\n' +
    'CERS6-AS1\n' +
    'RP4-697K14.15\n' +
    'AC007750.5\n' +
    'RP11-734K21.5\n' +
    'C10orf91\n' +
    'LINC01050\n' +
    'RP11-91H12.1\n' +
    'LINC00593\n' +
    'RP3-340N1.2\n' +
    'RP3-453C12.15\n' +
    'RP11-503D12.1\n' +
    'ZNF252P-AS1\n' +
    'CTD-2649C14.2\n' +
    'AC003003.5\n' +
    'C9orf106\n' +
    'BCAR4\n' +
    'RP4-550H1.7\n' +
    'GHET1\n' +
    'LINC01063\n' +
    'RP11-94I2.4\n' +
    'AC002331.1\n' +
    'RP11-1C8.4\n' +
    'KCNMB2-AS1\n' +
    'RP3-443C4.2\n' +
    'CTD-2105E13.15\n' +
    'RP1-202O8.2\n' +
    'RP11-398C13.6\n' +
    'CCDC183-AS1\n' +
    'CTC-260E6.3\n' +
    'LINC01213\n' +
    'AC092484.1\n' +
    'LINC00461\n' +
    'CTD-2587H24.5\n' +
    'AC007128.1\n' +
    'AP001412.1\n' +
    'RP11-367N14.3\n' +
    'RP11-316M1.3\n' +
    'RP11-428L9.1\n' +
    'RP11-61J19.2\n' +
    'RP1-28H20.3\n' +
    'RP11-295D4.1\n' +
    'RP11-803D5.1\n' +
    'RP11-445F12.1\n' +
    'AC069513.4\n' +
    'RP11-757F18.5\n' +
    'RP11-321P16.1\n' +
    'OR7E47P\n' +
    'RP11-616M22.12\n' +
    'CTD-2535I10.1\n' +
    'RP11-96K19.4\n' +
    'CTD-2337I7.1\n' +
    'RP4-781K5.4\n' +
    'AC018890.6\n' +
    'RP11-338K13.1\n' +
    'RP11-107I14.2\n' +
    'RP11-37C7.3\n' +
    'RP11-881M11.4\n' +
    'RP11-54O7.16\n' +
    'RP11-66D17.3\n' +
    'RP11-51F16.1\n' +
    'RP1-35C21.2\n' +
    'RP11-350J20.12\n' +
    'RP11-499E14.1\n' +
    'HPN-AS1\n' +
    'RP13-991F5.2\n' +
    'RP11-626G11.4\n' +
    'RP11-815M8.1\n' +
    'RP11-359G22.2\n' +
    'RP11-71L14.4\n' +
    'VSTM2A-OT1\n' +
    'AC000067.1\n' +
    'RP4-533D7.4\n' +
    'RP11-495P10.5\n' +
    'RP11-532M24.1\n' +
    'RP11-74C1.4\n' +
    'AL121578.2\n' +
    'RP11-83N9.6\n' +
    'RP11-396C23.2\n' +
    'RP11-982M15.8\n' +
    'CTD-2357A8.3\n' +
    'LA16c-329F2.2\n' +
    'RP11-166A12.1\n' +
    'RP11-477H21.2\n' +
    'CTA-384D8.31\n' +
    'AC015987.1\n' +
    'RP1-80N2.3\n' +
    'RP11-95P2.3\n' +
    'SSTR5-AS1\n' +
    'CTD-2620I22.3\n' +
    'RP11-27M9.1\n' +
    'WI2-87327B8.2\n' +
    'CTC-246B18.8\n' +
    'RP11-49I11.4\n' +
    'RP11-212I21.2\n' +
    'LA16c-431H6.7\n' +
    'FNDC1-IT1\n' +
    'AC005150.1\n' +
    'RP11-674N23.4\n' +
    'RP11-379F12.4\n' +
    'CTD-2008P7.1\n' +
    'AC010729.1\n' +
    'LINC00898\n' +
    'LINC01264\n' +
    'RP11-10A14.5\n' +
    'RP11-431J17.1\n' +
    'RP11-428K3.1\n' +
    'RP11-162J8.3\n' +
    'RP11-89K21.1\n' +
    'RP11-284F21.10\n' +
    'STAM-AS1\n' +
    'RP11-680B3.2\n' +
    'RP11-470C13.4\n' +
    'LINC01116\n' +
    'RP4-669K10.8\n' +
    'RP11-8L2.1\n' +
    'RP11-354K1.2\n' +
    'RP11-527N22.2\n' +
    'RP11-285E9.6\n' +
    'AC017060.1\n' +
    'U91319.1\n' +
    'MNX1-AS2\n' +
    'KB-1460A1.1\n' +
    'WI2-85898F10.2\n' +
    'RP11-65J3.15\n' +
    'RNF144A-AS1\n' +
    'CTD-3193O13.8\n' +
    'AC079767.4\n' +
    'LINC01468\n' +
    'RP11-552F3.9\n' +
    'RP13-616I3.1\n' +
    'CTD-2083E4.7\n' +
    'DLX2-AS1\n' +
    'LVCAT1\n' +
    'LINC00160\n' +
    'CTD-3023L14.2\n' +
    'RP11-246K15.1\n' +
    'RP11-62I21.1\n' +
    'RP11-244M2.1\n' +
    'RP11-110I1.6\n' +
    'RP11-66H6.4\n' +
    'RP11-180M15.7\n' +
    'AC135050.5\n' +
    'RP11-749I16.3\n' +
    'RP11-796E10.1\n' +
    'C15orf59-AS1\n' +
    'RP11-379K22.2\n' +
    'RP11-4K16.2\n' +
    'RP11-493L12.5\n' +
    'RP11-15F12.6\n' +
    'CTD-3010D24.3\n' +
    'RP11-429J17.2\n' +
    'RP11-650L12.2\n' +
    'AP000695.6\n' +
    'RP11-573G6.9\n' +
    'RP11-150O12.6\n' +
    'RP11-477I4.4\n' +
    'RP11-379K22.3\n' +
    'KB-173C10.2\n' +
    'U73166.2\n' +
    'HOXB-AS3\n' +
    'CTD-3203P2.1\n' +
    'USP30-AS1\n' +
    'RP11-649A18.4\n' +
    'AC010524.2\n' +
    'RP1-60O19.1\n' +
    'Z82214.3\n' +
    'ST6GAL2-IT1\n' +
    'RP11-149I2.4\n' +
    'ADAMTS19-AS1\n' +
    'RP11-332J15.3\n' +
    'RP11-65J21.1\n' +
    'RP1-272L16.1\n' +
    'HDAC11-AS1\n' +
    'RP11-546J1.1\n' +
    'RP11-54O7.18\n' +
    'LINC01426\n' +
    'AC159540.1\n' +
    'RP5-1092A3.4\n' +
    'RP11-417L19.2\n' +
    'CTD-2284J15.1\n' +
    'LINC01411\n' +
    'TMEM75\n' +
    'AC106869.2\n' +
    'RP11-644C3.1\n' +
    'LINC00884\n' +
    'RP4-530I15.6\n' +
    'RP11-560J1.2\n' +
    'RP11-326N17.2\n' +
    'ZNF350-AS1\n' +
    'HAR1B\n' +
    'LINC00887\n' +
    'RP11-336K24.12\n' +
    'RP11-449J21.5\n' +
    'RP11-401P9.5\n' +
    'AC007773.2\n' +
    'RP11-705O1.8\n' +
    'AC139100.3\n' +
    'RP11-702B10.2\n' +
    'LINC01105\n' +
    'AL022341.3\n' +
    'RP13-554M15.5\n' +
    'LINC00853\n' +
    'RP11-675F6.4\n' +
    'RP11-883A18.3\n' +
    'SCARNA10\n' +
    'CTD-2105E13.16\n' +
    'RP13-122B23.8\n' +
    'LINC01208\n' +
    'AC005301.8\n' +
    'RP11-472G21.2\n' +
    'RP11-287D1.4\n' +
    'SIAH2-AS1\n' +
    'CITF22-24E5.1\n' +
    'MAPT-IT1\n' +
    'RP11-483P21.2\n' +
    'CTD-3193O13.1\n' +
    'LINC00992\n' +
    'RP13-467H17.1\n' +
    'SPACA6P-AS\n' +
    'RP11-343H5.6\n' +
    'RP11-734K21.2\n' +
    'RP11-1055B8.1\n' +
    'YTHDF3-AS1\n' +
    'RP11-356K23.1\n' +
    'UBE2Q1-AS1\n' +
    'SYNPR-AS1\n' +
    'RBAKDN\n' +
    'LINC00605\n' +
    'RP11-120K18.2\n' +
    'RP11-354P11.2\n' +
    'RP11-190C22.8\n' +
    'RP11-1055B8.9\n' +
    'FEZF1-AS1\n' +
    'RP11-791G15.2\n' +
    'IL21-AS1\n' +
    'LINC00870\n' +
    'RP11-334C17.6\n' +
    'RP11-19E11.1\n' +
    'LINC01385\n' +
    'RP11-222G7.2\n' +
    'AC004156.3\n' +
    'CTC-260E6.6\n' +
    'RP11-319E12.2\n' +
    'AC144450.1\n' +
    'RP11-284F21.9\n' +
    'SNHG9\n' +
    'MYCNOS\n' +
    'RP5-1198O20.4\n' +
    'RP4-616B8.4\n' +
    'RP13-455A7.1\n' +
    'LA16c-352F7.1\n' +
    'CFAP58-AS1\n' +
    'RP4-781K5.5\n' +
    'AP006621.9\n' +
    'RP11-875O11.3\n' +
    'RP11-572O17.1\n' +
    'RP11-166N6.2\n' +
    'RP11-697N18.4\n' +
    'RP11-269G24.4\n' +
    'CTC-510F12.4\n' +
    'RP11-365O16.6\n' +
    'AC106900.6\n' +
    'AC023590.1\n' +
    'RP11-354P11.4\n' +
    'RP11-323J4.1\n' +
    'ABHD11-AS1\n' +
    'RP5-984P4.6\n' +
    'RP11-299G20.5\n' +
    'LA16c-360A4.1\n' +
    'RP11-930P14.2\n' +
    'CTC-246B18.10\n' +
    'RP11-85B7.2\n' +
    'RP11-546K22.3\n' +
    'RP11-212I21.5\n' +
    'LINC00628\n' +
    'RP11-83N9.5\n' +
    'FAM83A-AS1\n' +
    'RP11-736N17.10\n' +
    'RP11-527H14.4\n' +
    'CTD-2587H24.10\n' +
    'CTD-2589H19.6\n' +
    'RP11-739B23.1\n' +
    'CTA-363E6.2\n' +
    'AC131056.3\n' +
    'RP11-680F8.1\n' +
    'RP11-686G23.2\n' +
    'RP11-123K19.1\n' +
    'CTB-119C2.1\n' +
    'RP11-278A23.4\n' +
    'MIR155HG\n' +
    'RP3-461P17.10\n' +
    'RP11-510J16.5\n' +
    'CTD-2227E11.1\n' +
    'RP11-486M23.2\n' +
    'RP11-62C7.2\n' +
    'CH17-353B19.1\n' +
    'RP5-1119A7.14\n' +
    'NFE4\n' +
    'CTD-2314B22.1\n' +
    'LA16c-313D11.9\n' +
    'RP11-2C24.4\n' +
    'ARHGEF26-AS1\n' +
    'FALEC\n' +
    'RP11-109M17.2\n' +
    'AC083949.1\n' +
    'CTD-2134A5.4\n' +
    'RP11-699L21.1\n' +
    'RP11-343B18.2\n' +
    'RP11-675F6.3\n' +
    'C1QTNF9B-AS1\n' +
    'CTB-49A3.2\n' +
    'CTD-2256P15.1\n' +
    'LINC00518\n' +
    'RP1-150O5.3\n' +
    'RP11-265N7.2\n' +
    'RP11-2K6.1\n' +
    'RP4-616B8.6\n' +
    'RP1-207H1.3\n' +
    'AC006538.1\n' +
    'RP1-20B11.2\n' +
    'AC009236.2\n' +
    'RP5-952N6.1\n' +
    'RP11-332J15.4\n' +
    'RP11-53B2.2\n' +
    'RP11-100E13.1\n' +
    'RP11-356O9.2\n' +
    'RP11-523J2.1\n' +
    'RP11-519G16.3\n' +
    'RP5-836N17.4\n' +
    'CTD-2162K18.4\n' +
    'AC004221.2\n' +
    'RP11-452L6.8\n' +
    'RP11-465B22.8\n' +
    'RP11-1136G11.8\n' +
    'RP5-1002M8.4\n' +
    'AC011747.4\n' +
    'LINC00664\n' +
    'AC113617.1\n' +
    'RP11-300M24.1\n' +
    'RP11-505K9.5\n' +
    'RP11-522M21.3\n' +
    'RP11-713C5.1\n' +
    'RP11-666O2.2\n' +
    'AC124944.3\n' +
    'CTB-43E15.1\n' +
    'RP11-532F6.4\n' +
    'CTD-3020H12.4\n' +
    'DSCR9\n' +
    'RP11-274H24.1\n' +
    'RP11-98D18.15\n' +
    'RP11-147L13.2\n' +
    'RP11-711D18.2\n' +
    'RP4-781K5.6\n' +
    'TDRG1\n' +
    'RP11-462P6.1\n' +
    'RP1-167O22.1\n' +
    'RP11-1C8.5\n' +
    'RP11-191N8.2\n' +
    'RP11-390F4.3\n' +
    'RP11-383J24.1\n' +
    'RP11-54H7.4\n' +
    'LA16c-349E10.1\n' +
    'RP11-349A8.3\n' +
    'AC008088.4\n' +
    'RP11-654C22.2\n' +
    'LA16c-325D7.2\n' +
    'AF127577.8\n' +
    'RP11-1193F23.1\n' +
    'LINC01341\n' +
    'LINC00589\n' +
    'RP11-3J1.1\n' +
    'MIR3180-1\n' +
    'AE000661.37\n' +
    'AC123023.1\n' +
    'AL672294.1\n' +
    'RP11-159H10.3\n' +
    'RP11-367H1.1\n' +
    'RP13-452N2.1\n' +
    'AC018359.1\n' +
    'AC006077.3\n' +
    'RP11-607P23.1\n' +
    'RP11-92G12.3\n' +
    'RP11-159D12.11\n' +
    'CTA-384D8.33\n' +
    'EHMT2-AS1\n' +
    'RP11-492E3.2\n' +
    'RP11-390N6.1\n' +
    'LINC00524\n' +
    'RP11-284G10.1\n' +
    'RP11-382D12.2\n' +
    'AC007731.1\n' +
    'AC144450.2\n' +
    'RP11-888D10.3\n' +
    'CTA-992D9.7\n' +
    'SIX3-AS1\n' +
    'RP11-638F5.2\n' +
    'RP11-108K3.1\n' +
    'RP11-307C12.13\n' +
    'AC004988.1\n' +
    'CYP4A22-AS1\n' +
    'AC005363.11\n' +
    'XXbac-BPG248L24.13\n' +
    'RP11-239E10.2\n' +
    'AF178030.2\n' +
    'RP11-219B4.3\n' +
    'KB-1980E6.3\n' +
    'CTC-526N19.1\n' +
    'RP11-373I8.1\n' +
    'CTD-2331H12.7\n' +
    'RP11-132F7.2\n' +
    'RP11-16K12.1\n' +
    'AC007285.7\n' +
    'TRPM2-AS\n' +
    'CTC-480C2.1\n' +
    'RP11-349I1.2\n' +
    'CTD-2532K18.2\n' +
    'CTD-3193O13.12\n' +
    'AP000697.6\n' +
    'LINC01592\n' +
    'RP5-1063M23.2\n' +
    'AC109826.1\n' +
    'GACAT3\n' +
    'AC093620.5\n' +
    'RP11-145E17.2\n' +
    'FRGCA\n' +
    'RP11-327F22.6\n' +
    'RP11-1252I4.2\n' +
    'GACAT2\n' +
    'RP11-19J5.2\n' +
    'RP11-167H9.3\n' +
    'RP11-156L14.1\n' +
    'RP11-54O7.17\n' +
    'RP11-752L20.3\n' +
    'AC010761.14\n' +
    'AC114803.3\n' +
    'RP11-136K7.2\n' +
    'LINC01087\n' +
    'AC011513.4\n' +
    'RP11-476K15.1\n' +
    'RP11-483F11.7\n' +
    'LLNLR-276H7.1\n' +
    'RP11-322I2.1\n' +
    'MIR181A1HG\n' +
    'RP11-693L9.2\n' +
    'LINC00896\n' +
    'RP11-466M21.1\n' +
    'LINC01146\n' +
    'RP11-483I13.2\n' +
    'RP11-3B12.5\n' +
    'AC026471.6\n' +
    'RP11-128M1.1\n' +
    'RP11-621L6.3\n' +
    'RP11-1157N2__B.2\n' +
    'RP11-89H19.1\n' +
    'AC073325.1\n' +
    'RP11-1069G10.2\n' +
    'RP11-701H16.4\n' +
    'LINC01555\n' +
    'RP11-353N14.5\n' +
    'CTC-450M9.1\n' +
    'OVOL1-AS1\n' +
    'UBXN10-AS1\n' +
    'KCCAT211\n' +
    'RP11-336A10.5\n' +
    'SNAP47-AS1\n' +
    'RP11-416N2.3\n' +
    'LINC01215\n' +
    'RP11-432J24.2\n' +
    'RP11-1008C21.1\n' +
    'RP11-44N11.2\n' +
    'RP11-297L17.2\n' +
    'RP11-321G12.1\n' +
    'AC002310.7\n' +
    'RP11-93I21.3\n' +
    'RP11-826F13.1\n' +
    'IL12A-AS1\n' +
    'UMODL1-AS1\n' +
    'LINC01556\n' +
    'CTC-250I14.3\n' +
    'BSN-AS2\n' +
    'TTC3-AS1\n' +
    'XX-C2158C6.3\n' +
    'DGCR9\n' +
    'RP11-288L9.1\n' +
    'RP11-111I12.1\n' +
    'RP11-506O24.1\n' +
    'AC097468.4\n' +
    'RP11-350N15.5\n' +
    'RP1-288H2.2\n' +
    'LINC00494\n' +
    'RP11-416N2.4\n' +
    'RP11-284F21.7\n' +
    'RP4-607I7.1\n' +
    'CTD-2015A6.2\n' +
    'RP11-307C19.1\n' +
    'RP11-505K9.1\n' +
    'BRWD1-AS1\n' +
    'RP11-547D24.3\n' +
    'RP11-23E19.2\n' +
    'RP11-709D24.6\n' +
    'CRAT37\n' +
    'RP1-137K24.1\n' +
    'LINC00355\n' +
    'RP11-428C19.4\n' +
    'RP4-816N1.7\n' +
    'VAC14-AS1\n' +
    'IL21R-AS1\n' +
    'RP11-456H18.2\n' +
    'RP11-546K22.1\n' +
    'KB-1615E4.2\n' +
    'RP1-32B1.4\n' +
    'RP11-92K15.1\n' +
    'RP3-522D1.1\n' +
    'RP11-123B3.2\n' +
    'RP5-884M6.1\n' +
    'DRAIC\n' +
    'HOXC-AS2\n' +
    'RP11-157E21.1\n' +
    'RP11-351J23.1\n' +
    'RP4-760C5.3\n' +
    'RP11-498B4.5\n' +
    'XXbac-BPG308K3.5\n' +
    'AC079354.5\n' +
    'RP11-291B21.2\n' +
    'VAV3-AS1\n' +
    'RP11-221J22.2\n' +
    'RP11-588L15.2\n' +
    'RP11-281J9.2\n' +
    'RP11-466A19.7\n' +
    'INHBA-AS1\n' +
    'HOXA11-AS\n' +
    'RP11-98D18.1\n' +
    'RP5-1107A17.3\n' +
    'LINC01293\n' +
    'AC124944.5\n' +
    'RP11-353N14.1\n' +
    'CTC-137K3.1\n' +
    'FRY-AS1\n' +
    'RP13-131K19.6\n' +
    'RP13-714J12.1\n' +
    'RP11-209D14.4\n' +
    'RP11-616M22.1\n' +
    'RP11-381O6.1\n' +
    'RP11-571O6.2\n' +
    'RP11-476M19.2\n' +
    'RP11-423H2.4\n' +
    'CTD-2291D10.4\n' +
    'RP3-425C14.5\n' +
    'MKRN3-AS1\n' +
    'CTD-2591A6.2\n' +
    'RP11-88G17.6\n' +
    'RP11-95M15.1\n' +
    'UCA1\n' +
    'RP11-126K1.9\n' +
    'RP11-352G9.1\n' +
    'SALRNA1\n' +
    'RP11-84A19.4\n' +
    'RP11-10J21.4\n' +
    'RP11-102M11.2\n' +
    'RP11-240G22.4\n' +
    'NDP-AS1\n' +
    'RP11-44F14.2\n' +
    'AC015849.2\n' +
    'RP11-463D19.1\n' +
    'HOXB-AS4\n' +
    'CDKN2A-AS1\n' +
    'AC007204.2\n' +
    'RP11-143E21.3\n' +
    'RP11-378I6.1\n' +
    'LINC01351\n' +
    'RP11-532F6.5\n' +
    'KB-1615E4.3\n' +
    'SLX1A-SULT1A3\n' +
    'AP004372.1\n' +
    'CTD-2143L24.1\n' +
    'RP11-544M22.8\n' +
    'RP11-304F15.4\n' +
    'SLC7A11-AS1\n' +
    'RP11-255E6.6\n' +
    'LINC00668\n' +
    'CTD-2527I21.15\n' +
    'CTA-392E5.1\n' +
    'AC025016.1\n' +
    'LINC01214\n' +
    'RP11-473C18.3\n' +
    'C9orf173-AS1\n' +
    'RP11-126O1.4\n' +
    'MAPT-AS1\n' +
    'RP11-881M11.8\n' +
    'RP11-674E16.4\n' +
    'CTD-2619J13.13\n' +
    'RP11-131N11.4\n' +
    'CTB-109A12.1\n' +
    'RP4-594A5.1\n' +
    'ASH1L-IT1\n' +
    'RP4-534N18.2\n' +
    'AC012668.2\n' +
    'LINC01606\n' +
    'RP11-510N19.5\n' +
    'LINC00858\n' +
    'HPYR1\n' +
    'CTD-2281M20.1\n' +
    'RP11-486M23.3\n' +
    'RP11-25I15.3\n' +
    'RP11-260E18.1\n' +
    'LLNLR-304A6.1\n' +
    'RP11-379B8.1\n' +
    'CTD-2280E9.1\n' +
    'RP11-1336O20.2\n' +
    'RP11-25H12.1\n' +
    'RP1-50J22.4\n' +
    'RP11-298D21.1\n' +
    'CTD-3023L14.1\n' +
    'RP11-91H12.4\n' +
    'RP11-138J23.1\n' +
    'RP11-378A13.2\n' +
    'CTB-47B11.3\n' +
    'RP11-644A7.2\n' +
    'TBL1XR1-AS1\n' +
    'RP11-81H3.2\n' +
    'MIR7-3HG\n' +
    'C8orf49\n' +
    'RP11-44F14.10\n' +
    'RP11-108K3.2\n' +
    'RP11-616M22.2\n' +
    'RP11-514P8.2\n' +
    'RP11-556O9.2\n' +
    'RP5-1170K4.7\n' +
    'AC012594.1\n' +
    'RP11-307C19.2\n' +
    'RP11-806L2.5\n' +
    'RP11-367F23.2\n' +
    'RP3-326I13.1\n' +
    'LL22NC03-63E9.3\n' +
    'RP11-15I11.2\n' +
    'LURAP1L-AS1\n' +
    'KCNQ5-IT1\n' +
    'LINC00452\n' +
    'RP11-30J20.1\n' +
    'RP11-657O9.1\n' +
    'UBE2R2-AS1\n' +
    'RP11-642A1.2\n' +
    'RP11-834C11.5\n' +
    'RP11-506O24.2\n' +
    'XXbac-B444P24.14\n' +
    'RP4-530I15.9\n' +
    'RP11-57A1.1\n' +
    'CATIP-AS2\n' +
    'RP11-31I22.3\n' +
    'RP11-288L9.4\n' +
    'RP11-301G19.1\n' +
    'RP11-662I13.2\n' +
    'RP3-324O17.7\n' +
    'RP4-784A16.5\n' +
    'RP11-120K24.5\n' +
    'RP11-150O12.5\n' +
    'RP11-513G11.4\n' +
    'CITF22-92A6.2\n' +
    'AC022182.1\n' +
    'RP11-77H9.6\n' +
    'RP11-1018N14.5\n' +
    'RP11-61J19.3\n' +
    'AC093642.4\n' +
    'THSD4-AS1\n' +
    'RP4-761J14.9\n' +
    'RP5-881L22.5\n' +
    'RP4-655C5.4\n' +
    'RP11-45L9.1\n' +
    'FLJ16779\n' +
    'AC092162.1\n' +
    'RP11-367F23.1\n' +
    'RP11-248B24.1\n' +
    'LINC01583\n' +
    'RP1-228P16.3\n' +
    'CTD-2023M8.1\n' +
    'RP11-44K6.4\n' +
    'CTD-2576D5.4\n' +
    'RP4-778K6.3\n' +
    'RP4-536B24.4\n' +
    'LINC00483\n' +
    'RP11-159F24.6\n' +
    'TPRG1-AS2\n' +
    'C12orf80\n' +
    'RP11-673P17.4\n' +
    'RP11-539E17.5\n' +
    'RP4-564M11.2\n' +
    'AP000577.2\n' +
    'RP11-89F3.2\n' +
    'RP4-621N11.2\n' +
    'CTD-2319I12.5\n' +
    'CTD-2653D5.1\n' +
    'LINC01022\n' +
    'RP11-93K22.13\n' +
    'AC011294.3\n' +
    'CTD-3064M3.4\n' +
    'FOXP4-AS1\n' +
    'RP11-844P9.5\n' +
    'CTD-2315E11.1\n' +
    'RP5-1121A15.3\n' +
    'RP11-44F14.8\n' +
    'RP11-109J4.1\n' +
    'LINC01234\n' +
    'MIR4300HG\n' +
    'HMMR-AS1\n' +
    'RP11-16L9.2\n' +
    'RP11-648L3.2\n' +
    'CTD-2196E14.5\n' +
    'RP4-569M23.4\n' +
    'C5orf66-AS2\n' +
    'AC005786.6\n' +
    'RP11-229O3.1\n' +
    'SMYD3-IT1\n' +
    'RP11-364P22.1\n' +
    'AL773572.7\n' +
    'RP11-556I13.2\n' +
    'MIR142\n' +
    'LINC00520\n' +
    'CTD-2256P15.3\n' +
    'RP11-75C10.6\n' +
    'RP13-314C10.5\n' +
    'RP11-347E10.1\n' +
    'RP11-83B20.7\n' +
    'RP11-464D20.6\n' +
    'RP6-191P20.4\n' +
    'RP11-118E18.4\n' +
    'AC073043.1\n' +
    'RP1-127H14.3\n' +
    'RP11-143J24.1\n' +
    'RP5-1178H5.2\n' +
    'RP11-469J4.3\n' +
    'JARID2-AS1\n' +
    'Z84812.4\n' +
    'RP11-226M10.3\n' +
    'RP11-218F4.1\n' +
    'RP1-69M21.2\n' +
    'MIR663AHG\n' +
    'RP11-60A24.3\n' +
    'RP11-37N22.1\n' +
    'AC007386.2\n' +
    'AC016683.5\n' +
    'RP11-474P2.5\n' +
    'AC011899.10\n' +
    'GTSCR1\n' +
    'RP11-452H21.1\n' +
    'RP11-240G22.5\n' +
    'CTC-248O19.1\n' +
    'RP11-157D23.2\n' +
    'AC023137.2\n' +
    'LINC00221\n' +
    'RP11-14C10.5\n' +
    'RP13-631K18.2\n' +
    'CH17-373J23.1\n' +
    'BBOX1-AS1\n' +
    'CTC-441N14.1\n' +
    'RP1-102G20.5\n' +
    'DLX6-AS1\n' +
    'RP11-109A6.2\n' +
    'RP11-332J15.1\n' +
    'RP11-734I18.1\n' +
    'C17orf82\n' +
    'RP11-1000B6.2\n' +
    'PIK3CD-AS1\n' +
    'AC005863.1\n' +
    'RP11-3P17.4\n' +
    'RP11-119K6.6\n' +
    'AC079613.1\n' +
    'RP11-550A5.2\n' +
    'C8orf17\n' +
    'LINC01513\n' +
    'RP11-485F13.1\n' +
    'RP11-394B2.6\n' +
    'RP11-247A12.1\n' +
    'LINC01508\n' +
    'RP11-320G10.1\n' +
    'CTA-363E6.3\n' +
    'LINC01446\n' +
    'RP1-71H19.2\n' +
    'RP11-269F21.3\n' +
    'CTD-2332E11.2\n' +
    'CTD-2509G16.2\n' +
    'RP11-424M24.3\n' +
    'CTD-2349P21.6\n' +
    'RP11-1036E20.9\n' +
    'FOXCUT\n' +
    'RP11-608O21.1\n' +
    'RP11-6N13.1\n' +
    'RP11-680F20.10\n' +
    'RP1-153P14.8\n' +
    'RP11-245G13.2\n' +
    'RP11-213G21.2\n' +
    'RP11-484N16.1\n' +
    'RP11-304F15.6\n' +
    'RP11-402L5.1\n' +
    'CTA-363E6.1\n' +
    'RP11-619L12.4\n' +
    'LINC00365\n' +
    'AC006372.4\n' +
    'RP11-439A17.9\n' +
    'LINC00402\n' +
    'DGCR5\n' +
    'LINC00158\n' +
    'FER1L6-AS2\n' +
    'RP11-98F14.11\n' +
    'RP11-356I2.1\n' +
    'RP11-428C19.5\n' +
    'LINC00504\n' +
    'RP11-95G17.2\n' +
    'LINC01163\n' +
    'RP11-376O6.2\n' +
    'RP11-661C8.2\n' +
    'RP11-775G23.1\n' +
    'AE000662.93\n' +
    'AC009227.2\n' +
    'RP6-91H8.3\n' +
    'AC099684.1\n' +
    'RP11-84N19.1\n' +
    'RP11-456D7.1\n' +
    'RP11-386B13.4\n' +
    'RP13-16H11.8\n' +
    'AP001610.5\n' +
    'RP11-390F4.6\n' +
    'AL109761.5\n' +
    'AC007405.8\n' +
    'RPPH1\n' +
    'RP3-523K23.2\n' +
    'RP1-90G24.6\n' +
    'RP11-830F9.7\n' +
    'RP11-527N22.1\n' +
    'LINC00563\n' +
    'RP11-440G9.1\n' +
    'AC034110.1\n' +
    'RP11-93B14.4\n' +
    'RP11-466A19.3\n' +
    'GS1-600G8.5\n' +
    'RP11-398B16.2\n' +
    'AC011997.1\n' +
    'RP11-146N18.1\n' +
    'CTD-2013M15.1\n' +
    'RP11-164H13.1\n' +
    'AC104134.2\n' +
    'BARX1-AS1\n' +
    'AC006946.15\n' +
    'RP11-110L15.2\n' +
    'AC005355.1\n' +
    'LINC01507\n' +
    'RP11-83A16.1\n' +
    'RP5-881P19.7\n' +
    'RP1-269M15.3\n' +
    'RP11-710F7.2\n' +
    'BFSP2-AS1\n' +
    'CTD-2265O21.7\n' +
    'RP11-18H21.1\n' +
    'RP11-513G11.3\n' +
    'DNM3-IT1\n' +
    'NCKAP5-IT1\n' +
    'AL133493.2\n' +
    'RP11-53B2.1\n' +
    'RP11-964E11.2\n' +
    'AC002383.2\n' +
    'AL050303.10\n' +
    'RP11-360L9.7\n' +
    'RP4-736L20.3\n' +
    'RP11-298E9.5\n' +
    'RP11-466A19.8\n' +
    'RP11-320G24.1\n' +
    'TLR8-AS1\n' +
    'RP11-143K11.5\n' +
    'RP11-314N13.9\n' +
    'RP1-228P16.5\n' +
    'RP11-94H18.1\n' +
    'RP11-575M22.1\n' +
    'AC006262.4\n' +
    'RP1-256G22.2\n' +
    'RP11-494O16.4\n' +
    'RP11-471M2.3\n' +
    'AC024592.9\n' +
    'RP11-428G5.5\n' +
    'RP5-983L19.2\n' +
    'RP11-421E14.2\n' +
    'LINC00930\n' +
    'RP11-118E18.1\n' +
    'LINC00113\n' +
    'CTD-2265O21.3\n' +
    'LA16c-395F10.1\n' +
    'RP11-654G14.1\n' +
    'AC011298.2\n' +
    'RP11-494H4.3\n' +
    'RP11-624C23.1\n' +
    'RP11-661D19.3\n' +
    'RP11-454P21.1\n' +
    'RP11-732M18.4\n' +
    'RP11-284J1.1\n' +
    'CTA-972D3.2\n' +
    'AC007365.1\n' +
    'XXbac-B33L19.4\n' +
    'RP11-73G16.2\n' +
    'C1orf137\n' +
    'RP11-766N7.3\n' +
    'RP11-531H8.2\n' +
    'RP11-1124B17.1\n' +
    'HUNK-AS1\n' +
    'CTD-2538C1.3\n' +
    'RP11-484L8.1\n' +
    'SAMSN1-AS1\n' +
    'XXyac-YM21GA2.7\n' +
    'RP11-124N19.3\n' +
    'LINC00322\n' +
    'CTD-3195I5.4\n' +
    'RP5-1011O1.3\n' +
    'AE000661.50\n' +
    'AC012354.6\n' +
    'RP11-297D21.2\n' +
    'RP11-527H14.6\n' +
    'RP11-9G1.3\n' +
    'MYCNUT\n' +
    'RP11-49O14.2\n' +
    'RP11-431J24.2\n' +
    'RP11-274J7.2\n' +
    'RP5-887A10.1\n' +
    'MYB-AS1\n' +
    'RP11-115C10.1\n' +
    'RP11-630D6.5\n' +
    'RP3-413H6.2\n' +
    'RP11-203B7.2\n' +
    'RP11-174G17.3\n' +
    'RP3-333B15.5\n' +
    'AC133785.1\n' +
    'RP11-135A1.3\n' +
    'RP11-107I14.5\n' +
    'RP11-180P8.3\n' +
    'RP11-149I9.2\n' +
    'GLTSCR1-AS1\n' +
    'RP11-315E17.1\n' +
    'AC037445.1\n' +
    'RP11-108P20.4\n' +
    'CTD-2147F2.1\n' +
    'LINC01559\n' +
    'RP11-1070N10.5\n' +
    'CTD-2509G16.5\n' +
    'RP11-386I8.4\n' +
    'RP11-61L19.1\n' +
    'RP5-1120P11.3\n' +
    'RP11-242J7.1\n' +
    'RP11-700H6.1\n' +
    'RP11-123K3.9\n' +
    'RP11-276E17.2\n' +
    'RP11-780O24.2\n' +
    'CTD-2340D6.2\n' +
    'RP11-278H7.1\n' +
    'PLAC4\n' +
    'KB-1991G8.1\n' +
    'LINC01489\n' +
    'RP11-109E24.1\n' +
    'RP11-592N21.2\n' +
    'RP11-406D1.2\n' +
    'RP11-501O2.5\n' +
    'RP11-439E19.7\n' +
    'AC003005.2\n' +
    'RP11-35O15.1\n' +
    'RP4-539M6.22\n' +
    'CTD-2118P12.1\n' +
    'RP11-145H9.3\n' +
    'RP11-474D1.3\n' +
    'CTD-2014D20.1\n' +
    'LINC01399\n' +
    'PHACTR2-AS1\n' +
    'RP11-260A9.6\n' +
    'AC011747.3\n' +
    'RP11-282I1.1\n' +
    'AC114763.1\n' +
    'RP11-67K19.3\n' +
    'RP11-539L10.4\n' +
    'RP11-495O11.1\n' +
    'CASC20\n' +
    'RP11-1260E13.1\n' +
    'PTPRJ-AS1\n' +
    'AC004158.3\n' +
    'RP11-179A10.1\n' +
    'RP11-705O24.1\n' +
    'RP11-1250I15.3\n' +
    'RP11-352D13.5\n' +
    'LINC00626\n' +
    'AC005329.7\n' +
    'AC005796.2\n' +
    'RP11-429E11.2\n' +
    'RP11-23I7.1\n' +
    'LA16c-381G6.1\n' +
    'CTD-3035K23.6\n' +
    'PEX5L-AS1\n' +
    'RSF1-IT1\n' +
    'RP11-436M15.3\n' +
    'AC103564.7\n' +
    'AC002551.1\n' +
    'RP11-483A20.3\n' +
    'AC091814.2\n' +
    'RP11-445P17.3\n' +
    'AC000124.1\n' +
    'RP11-102N12.2\n' +
    'LINC01518\n' +
    'RP3-388N13.3\n' +
    'RP11-268G12.1\n' +
    'RP11-573N10.1\n' +
    'MIR548XHG\n' +
    'AC068580.7\n' +
    'RP11-134N1.2\n' +
    'RP11-434D11.4\n' +
    'KB-1930G5.4\n' +
    'RP11-326C3.2\n' +
    'FAM230C\n' +
    'RP11-66H6.3\n' +
    'RP11-352D13.6\n' +
    'AC013480.2\n' +
    'RP11-97N19.3\n' +
    'AC128709.4\n' +
    'LINC01574\n' +
    'LINC01470\n' +
    'RP11-20G13.1\n' +
    'RP11-669E14.4\n' +
    'LBX1-AS1\n' +
    'CTA-305I2.1\n' +
    'RP11-619I22.1\n' +
    'LINC01501\n' +
    'RP11-167H9.4\n' +
    'AC005757.6\n' +
    'LINC01120\n' +
    'RP11-3B12.2\n' +
    'RP11-445L6.3\n' +
    'RP11-180M15.3\n' +
    'RP11-543G18.1\n' +
    'FARSA-AS1\n' +
    'CTD-2066L21.3\n' +
    'RP11-713M6.2\n' +
    'RP4-754E20__A.5\n' +
    'AL133243.3\n' +
    'RP11-599B13.3\n' +
    'RP11-334G22.1\n' +
    'ENOX1-AS1\n' +
    'RP11-153K16.1\n' +
    'RP13-487P22.1\n' +
    'RP11-134D3.1\n' +
    'AC023481.1\n' +
    'KB-1184D12.1\n' +
    'RP11-366F6.2\n' +
    'CTD-2313F11.1\n' +
    'CTA-339C12.1\n' +
    'RP11-1B20.1\n' +
    'RP11-803D5.4\n' +
    'RP5-837J1.4\n' +
    'LINC01194\n' +
    'RP11-576D8.4\n' +
    'RP11-384C4.7\n' +
    'RP11-301G7.1\n' +
    'ELDR\n' +
    'CTD-2072I24.1\n' +
    'RP11-423E7.2\n' +
    'RP11-95I16.6\n' +
    'SIDT1-AS1\n' +
    'LA16c-390E6.3\n' +
    'RP11-148O21.2\n' +
    'RP11-154H12.2\n' +
    'C10orf126\n' +
    'RP11-1086F11.1\n' +
    'AC093627.7\n' +
    'LL22NC03-N64E9.1\n' +
    'AP000439.5\n' +
    'RP11-110G21.2\n' +
    'AC018804.3\n' +
    'RP11-127I20.7\n' +
    'AC007163.3\n' +
    'RP13-870H17.3\n' +
    'AC002401.1\n' +
    'AJ003147.8\n' +
    'RP5-1028L10.2\n' +
    'RP1-166H4.2\n' +
    'RP11-18F14.4\n' +
    'NOVA1-AS1\n' +
    'RP11-181B11.2\n' +
    'CTD-3064H18.2\n' +
    'RP11-14C10.3\n' +
    'LINC01124\n' +
    'RP11-479J7.2\n' +
    'MIMT1\n' +
    'RP11-496D24.2\n' +
    'RP11-346D19.1\n' +
    'RP11-1103G16.1\n' +
    'RP13-766D20.4\n' +
    'RP11-46A10.2\n' +
    'SHANK2-AS2\n' +
    'RP5-858B6.1\n' +
    'RP11-114G22.1\n' +
    'AC015933.2\n' +
    'RP11-473C19.1\n' +
    'RP11-306I1.2\n' +
    'AC004593.3\n' +
    'RP4-668J24.2\n' +
    'RP11-408B11.2\n' +
    'RP11-397A16.1\n' +
    'LINC00552\n' +
    'ABCC5-AS1\n' +
    'RP11-338L22.2\n' +
    'ASTN2-AS1\n' +
    'RP4-737E23.2\n' +
    'LINC01016\n' +
    'BTBD9-AS1\n' +
    'RP1-71H24.1\n' +
    'MIR2052HG\n' +
    'RP1-37N7.1\n' +
    'POU6F2-AS2\n' +
    'RP11-65D17.1\n' +
    'SC22CB-1D7.1\n' +
    'RP11-77A13.1\n' +
    'DLGAP1-AS3\n' +
    'RP11-243J16.7\n' +
    'RP4-613A2.1\n' +
    'SAMMSON\n' +
    'RP11-813F20.4\n' +
    'RP11-407B7.3\n' +
    'SPATA3-AS1\n' +
    'RP11-91I20.4\n' +
    'CTC-461F20.1\n' +
    'RP11-616M22.3\n' +
    'NAV2-AS3\n' +
    'CTB-161C1.1\n' +
    'RP5-894D12.4\n' +
    'RP5-1029K10.4\n' +
    'RP11-403H13.1\n' +
    'PCSK6-AS1\n' +
    'CTB-58E17.2\n' +
    'RP11-863H1.1\n' +
    'MIR3179-1\n' +
    'ITPK1-AS1\n' +
    'FLJ45079\n' +
    'RP5-1125A11.4\n' +
    'RP11-275I4.2\n' +
    'RP11-46O21.2\n' +
    'CASC9\n' +
    'RP11-399K21.13\n' +
    'RP13-379L11.2\n' +
    'RP11-691H4.4\n' +
    'RP11-28G8.1\n' +
    'LINC00602\n' +
    'RP11-122A21.2\n' +
    'RP11-691H4.3\n' +
    'CTD-2024P10.1\n' +
    'RP11-140A10.3\n' +
    'RP11-21A7A.2\n' +
    'AC000095.11\n' +
    'RP11-552D8.1\n' +
    'RP11-317N12.1\n' +
    'RP11-56B16.5\n' +
    'AC012370.2\n' +
    'RP5-951N9.1\n' +
    'RP11-1109M24.5\n' +
    'RP1-63M2.5\n' +
    'C3orf67-AS1\n' +
    'KIRREL3-AS1\n' +
    'RP11-211C9.1\n' +
    'CTD-2560E9.5\n' +
    'C8orf87\n' +
    'RP11-429J17.4\n' +
    'RP11-557C18.4\n' +
    'RP11-406H4.1\n' +
    'AC098973.2\n' +
    'LINC01107\n' +
    'AC092168.2\n' +
    'RP11-279F6.2\n' +
    'RP11-350D17.2\n' +
    'RP11-298J20.3\n' +
    'RP11-268G12.3\n' +
    'C18orf15\n' +
    'AC114730.8\n' +
    'LINC01603\n' +
    'LINC01460\n' +
    'AC078852.2\n' +
    'LINC00244\n' +
    'RP11-849I19.1\n' +
    'RP11-1110F20.1\n' +
    'LINC00547\n' +
    'CTD-2339L15.3\n' +
    'LINC01287\n' +
    'RP11-693J15.5\n' +
    'RP11-127O4.2\n' +
    'RP11-504I13.2\n' +
    'LINGO1-AS1\n' +
    'RP11-343K8.3\n' +
    'RP11-16C1.2\n' +
    'PHKA1-AS1\n' +
    'CTC-321K16.4\n' +
    'RP11-519M16.1\n' +
    'RP1-296L11.1\n' +
    'C5orf17\n' +
    'RP4-718D20.3\n' +
    'RP5-1125N11.1\n' +
    'AC008060.7\n' +
    'CTB-127C13.1\n' +
    'RP11-173A16.2\n' +
    'RABGAP1L-IT1\n' +
    'RP11-417B4.2\n' +
    'RP11-85O21.5\n' +
    'RP13-379L11.1\n' +
    'RP5-1121H13.4\n' +
    'KCNAB1-AS2\n' +
    'RP11-642A1.1\n' +
    'RP1-60N8.1\n' +
    'RC3H1-IT1\n' +
    'RP11-753D20.3\n' +
    'RP11-15G16.1\n' +
    'RP11-497G19.1\n' +
    'Z83001.1\n' +
    'RP11-565A3.2\n' +
    'RP11-319E12.1\n' +
    'RP11-570L15.1\n' +
    'RP11-642C5.1\n' +
    'RP11-1038A11.1\n' +
    'LARS2-AS1\n' +
    'RP11-1038A11.3\n' +
    'AP000997.3\n' +
    'RP1-247F3.1\n' +
    'CTD-2162K18.3\n' +
    'RP11-1191J2.2\n' +
    'AC091153.4\n' +
    'RP11-1112C15.2\n' +
    'GLIS3-AS1\n' +
    'RP11-586D19.2\n' +
    'LARGE-AS1\n' +
    'RP5-1065O2.4\n' +
    'RP11-169F17.1\n' +
    'RP11-187E13.2\n' +
    'RP11-269G24.2\n' +
    'RP11-20B24.4\n' +
    'NAALADL2-AS2\n' +
    'RP11-236L14.1\n' +
    'RP11-359M6.1\n' +
    'CTB-181H17.1\n' +
    'AC142293.3\n' +
    'C17orf102\n' +
    'CTC-218B8.3\n' +
    'CTD-3224K15.2\n' +
    'CTD-2012K14.2\n' +
    'RP11-349F21.5\n' +
    'AC007163.6\n' +
    'RP11-497G19.2\n' +
    'RP11-195M16.1\n' +
    'C1orf143\n' +
    'RP1-310O13.13\n' +
    'RP5-1121E10.2\n' +
    'AC078882.1\n' +
    'CTD-2236F14.1\n' +
    'RP11-665C16.5\n' +
    'LINC01623\n' +
    'RP11-480C16.1\n' +
    'RP6-114E22.1\n' +
    'CTD-2199O4.3\n' +
    'C12orf77\n' +
    'MACROD2-AS1\n' +
    'RP11-785H5.2\n' +
    'RP11-329J18.3\n' +
    'RP11-626E13.1\n' +
    'RP11-123K19.2\n' +
    'AC133680.1\n' +
    'RP3-448I9.2\n' +
    'TMEM108-AS1\n' +
    'RP11-142A23.1\n' +
    'CTC-244M17.1\n' +
    'XXbac-BPG27H4.8\n' +
    'ATXN8OS\n' +
    'RP11-171G2.1\n' +
    'CTD-3118D11.3\n' +
    'RP11-181K12.2\n' +
    'RP11-513G11.2\n' +
    'RP4-784A16.3\n' +
    'E2F3-IT1\n' +
    'RP11-275I4.1\n' +
    'LINC01611\n' +
    'CTD-2021H9.3\n' +
    'RP11-817G13.3\n' +
    'AP001465.5\n' +
    'RP5-940F7.2\n' +
    'RP4-799D16.1\n' +
    'RP11-235G24.3\n' +
    'CTD-2377D24.4\n' +
    'RP11-13N12.1\n' +
    'CTB-138E5.1\n' +
    'RP11-1250I15.2\n' +
    'RP11-96B5.3\n' +
    'LINC01179\n' +
    'STX18-IT1\n' +
    'RP11-624L4.2\n' +
    'RP11-583F2.5\n' +
    'RP11-122K13.15\n' +
    'LINC00319\n' +
    'RP11-152H18.4\n' +
    'RP11-573G6.10\n' +
    'RP11-243J18.2\n' +
    'AC019118.3\n' +
    'LSAMP-AS1\n' +
    'RP11-252K23.1\n' +
    'RP11-319G9.1\n' +
    'LINC01587\n' +
    'AC005281.2\n' +
    'TET2-AS1\n' +
    'RP11-654A16.1\n' +
    'RP1-111C20.3\n' +
    'RP11-268P4.5\n' +
    'RP11-148O21.4\n' +
    'RP13-297E16.5\n' +
    'CTD-2034I21.2\n' +
    'RP11-21A7A.4\n' +
    'CTA-833B7.2\n' +
    'CTD-2308N23.2\n' +
    'RP11-131K5.2\n' +
    'RP11-459C13.1\n' +
    'RP13-143G15.4\n' +
    'RP11-61G19.1\n' +
    'LINC01475\n' +
    'AC078852.1\n' +
    'CTD-2501E16.2\n' +
    'RP11-433A10.3\n' +
    'C1orf195\n' +
    'HLCS-IT1\n' +
    'RP11-284H18.1\n' +
    'TRPC7-AS1\n' +
    'CTD-2517M22.9\n' +
    'CTC-499J9.1\n' +
    'RP11-713M15.1\n' +
    'RP11-893F2.15\n' +
    'MIR4290HG\n' +
    'AP000462.3\n' +
    'AC005522.7\n' +
    'RP11-1070N10.7\n' +
    'LINC01419\n' +
    'LAMP5-AS1\n' +
    'RP1-232N11.2\n' +
    'RP11-396J6.1\n' +
    'RP11-118E18.2\n' +
    'SHANK2-AS3\n' +
    'RP11-433M22.2\n' +
    'RP11-255M2.2\n' +
    'RP11-547C5.1\n' +
    'AC092675.3\n' +
    'RP11-315I20.3\n' +
    'SPATA13-AS1\n' +
    'GS1-279B7.1\n' +
    'CTD-2139B15.5\n' +
    'RP11-354H21.1\n' +
    'RP11-401P9.7\n' +
    'RP11-557C18.3\n' +
    'GS1-120K12.4\n' +
    'RP11-185E8.1\n' +
    'AC006262.5\n' +
    'RP11-396O20.2\n' +
    'RP11-12A16.3\n' +
    'RP11-105N14.3\n' +
    'LINC01143\n' +
    'RP11-32K4.1\n' +
    'RP11-110H1.8\n' +
    'RP11-327O17.2\n' +
    'CTC-573N18.1\n' +
    'RP11-750H9.7\n' +
    'RP11-305P22.9\n' +
    'RP11-230L22.4\n' +
    'CTA-797E19.2\n' +
    'RP11-266N13.2\n' +
    'LINC00226\n' +
    'AJ003147.9\n' +
    'RRM1-AS1\n' +
    'RP11-289F5.1\n' +
    'RP11-157H4.1\n' +
    'RP11-502N13.2\n' +
    'RP11-615J4.3\n' +
    'AC007078.4\n' +
    'ARHGEF3-AS1\n' +
    'FAM155A-IT1\n' +
    'RP11-730G20.1\n' +
    'RP11-5P22.3\n' +
    'AGBL4-IT1\n' +
    'AC106873.4\n' +
    'RP11-87E22.2\n' +
    'LINC01168\n' +
    'NFIA-AS1\n' +
    'AC074366.3\n' +
    'RP11-1191J2.4\n' +
    'RP11-68I3.10\n' +
    'RP4-660H19.1\n' +
    'RP11-161I2.1\n' +
    'SCARNA2\n' +
    'RP11-542P2.2\n' +
    'AC106875.1\n' +
    'ST7-AS2\n' +
    'AC106801.1\n' +
    'RP11-625L16.3\n' +
    'RP11-235C23.6\n' +
    'RP11-359N11.1\n' +
    'RP11-101O21.1\n' +
    'RP11-206M11.7\n' +
    'ARHGEF9-IT1\n' +
    'RP11-386M24.10\n' +
    'RP11-301N24.3\n' +
    'RP11-559M23.1\n' +
    'LINC00434\n' +
    'RP11-497H16.9\n' +
    'RP11-742D12.2\n' +
    'AC010967.2\n' +
    'CTD-2616J11.14\n' +
    'CTA-797E19.1\n' +
    'DPP10-AS1\n' +
    'RP11-81A1.4\n' +
    'AC019118.4\n' +
    'CMB9-52H4.1\n' +
    'LINC00393\n' +
    'RP11-595B24.2\n' +
    'AC073957.15\n' +
    'RP3-348I23.2\n' +
    'RP4-587D13.1\n' +
    'AC005786.5\n' +
    'RP11-354K1.1\n' +
    'CTD-2286N8.1\n' +
    'AP003900.6\n' +
    'RP11-862G15.2\n' +
    'RP11-338E21.1\n' +
    'HP09025\n' +
    'RP11-737O24.1\n' +
    'AC008079.9\n' +
    'RP11-545A16.1\n' +
    'CH507-42P11.6\n' +
    'RP11-527L4.2\n' +
    'AC017002.4\n' +
    'WASIR1\n' +
    'CTB-105N12.2\n' +
    'RP11-703M24.5\n' +
    'RP11-263K4.5\n' +
    'LINC00276\n' +
    'RP11-314N14.1\n' +
    'CTC-340A15.2\n' +
    'RP11-946L16.1\n' +
    'RP11-309M7.1\n' +
    'RP11-362L22.1\n' +
    'CCAT1\n' +
    'RP11-352D3.2\n' +
    'CTB-49A3.5\n' +
    'RP11-711M9.2\n' +
    'LINC00383\n' +
    'THRA1/BTR\n' +
    'AL928742.12\n' +
    'RP11-30L3.2\n' +
    'RP11-774D14.1\n' +
    'AC092652.1\n' +
    'CTD-2589M5.5\n' +
    'RP5-867C24.4\n' +
    'AC005487.2\n' +
    'RP11-44F14.5\n' +
    'RP1-68D18.3\n' +
    'AC079610.1\n' +
    'AC128709.2\n' +
    'RP11-611E13.3\n' +
    'AC006372.6\n' +
    'RP11-349F21.2\n' +
    'RP11-876N24.2\n' +
    'RP11-434I12.3\n' +
    'RP11-190J1.3\n' +
    'RP11-396O20.1\n' +
    'RP11-6D1.3\n' +
    'LINC00392\n' +
    'HOTTIP\n' +
    'RP11-313L6.2\n' +
    'CACNA1C-IT3\n' +
    'RP11-384C4.6\n' +
    'RP11-25B7.1\n' +
    'RP11-279O17.1\n' +
    'RP11-544M22.1\n' +
    'CACNA1C-AS4\n' +
    'RP11-699L21.2\n' +
    'CTA-243E7.3\n' +
    'RP11-349F21.3\n' +
    'RP11-32B5.8\n' +
    'AC069277.2\n' +
    'RP11-474B12.1\n' +
    'CTC-575I10.1\n' +
    'MGC32805\n' +
    'RP11-711K1.7\n' +
    'RP11-380J14.1\n' +
    'LINC01523\n' +
    'RP11-415C15.1\n' +
    'RP4-604K5.3\n' +
    'LNX1-AS1\n' +
    'AE000658.31\n' +
    'CTD-2350J17.1\n' +
    'RP11-725D20.1\n' +
    'RP11-109D20.1\n' +
    'RP11-115F18.1\n' +
    'CTC-431G16.2\n' +
    'CTD-2013N17.4\n' +
    'AC055764.1\n' +
    'RP11-135A24.2\n' +
    'RP5-912I13.1\n' +
    'LINC00824\n' +
    'RP11-328C8.5\n' +
    'RP11-856M7.1\n' +
    'RP11-712P20.2\n' +
    'RP13-379L11.4\n' +
    'LINC00951\n' +
    'FBXO36-IT1\n' +
    'CTD-3162L10.3\n' +
    'AC013448.1\n' +
    'RP11-420K8.1\n' +
    'AC002044.3\n' +
    'RP5-951N9.2\n' +
    'AC064874.1\n' +
    'AC107399.2\n' +
    'LINC01227\n' +
    'RP11-185E12.2\n' +
    'RP11-540O11.7\n' +
    'LINC01205\n' +
    'RP11-220C2.1\n' +
    'RP11-159M11.2\n' +
    'KB-1410C5.2\n' +
    'RP5-916O11.2\n' +
    'RP11-142M10.2\n' +
    'AP000462.2\n' +
    'RP3-468O1.6\n' +
    'AL163953.2\n' +
    'RP11-1102P22.2\n' +
    'RP1-46F2.3\n' +
    'RP1-32I10.10\n' +
    'LINC00200\n' +
    'RP11-103J17.2\n' +
    'LINC01456\n' +
    'RP11-270M14.4\n' +
    'RP11-626P14.2\n' +
    'RP11-168P13.1\n' +
    'RP11-540O11.8\n' +
    'CTD-3222D19.4\n' +
    'U51244.2\n' +
    'RP11-2L8.1\n' +
    'RP11-435O5.6\n' +
    'CTC-537E7.2\n' +
    'AIRN\n' +
    'RP11-572N21.1\n' +
    'ADARB2-AS1\n' +
    'RP11-408N14.1\n' +
    'RP11-353N14.3\n' +
    'RP11-805F19.3\n' +
    'RP11-145E17.3\n' +
    'CTD-2552K11.2\n' +
    'KB-1460A1.3\n' +
    'LINC01014\n' +
    'AC107057.1\n' +
    'AC108025.2\n' +
    'AC009262.2\n' +
    'Z99756.1\n' +
    'RP11-21B23.2\n' +
    'RP11-314P15.2\n' +
    'CTD-2583P5.1\n' +
    'RP11-335E6.2\n' +
    'RP11-71G12.1\n' +
    'RP11-115H15.2\n' +
    'LINC00491\n' +
    'SCHLAP1\n' +
    'CACNA2D3-AS1\n' +
    'RP4-539M6.14\n' +
    'RP11-319E16.1\n' +
    'AC092669.3\n' +
    'XIAP-AS1\n' +
    'FLJ37505\n' +
    'RP4-752I6.1\n' +
    'PCAT2\n' +
    'RP13-539J13.1\n' +
    'AC007182.6\n' +
    'AC009518.8\n' +
    'RP11-190D6.1\n' +
    'RP11-296E23.1\n' +
    'TERC\n' +
    'RP11-298C2.1\n' +
    'GS1-594A7.3\n' +
    'RP11-718I15.1\n' +
    'CTD-2015H3.1\n' +
    'RP11-813F20.2\n' +
    'RP11-160E2.6\n' +
    'RP1-137K2.2\n' +
    'RP11-150O12.4\n' +
    'RP11-645N11.3\n' +
    'RP11-321L2.1\n' +
    'RP11-430E17.1\n' +
    'RP11-392B6.1\n' +
    'RP11-108K3.3\n' +
    'RP11-44K6.2\n' +
    'RP11-120I21.2\n' +
    'MIR4432HG\n' +
    'RP11-78C3.1\n' +
    'RP11-177F15.1\n' +
    'RP11-96C23.9\n' +
    'RP11-203E8.1\n' +
    'RP11-359E8.5\n' +
    'CTB-91J4.1\n' +
    'AC079776.3\n' +
    'RP11-785G17.1\n' +
    'RP11-395N21.2\n' +
    'RP11-357N13.3\n' +
    'RP11-874J12.4\n' +
    'RP11-550P17.5\n' +
    'RP11-126K15.1\n' +
    'RP3-416J7.4\n' +
    'AC016909.1\n' +
    'RP11-522M21.2\n' +
    'CTD-2547H18.1\n' +
    'GS1-122H1.1\n' +
    'AP001962.3\n' +
    'RP11-302L19.1\n' +
    'RP11-15F12.3\n' +
    'RASA2-IT1\n' +
    'RP11-308B16.2\n' +
    'RP11-776H12.1\n' +
    'RP11-9H20.2\n' +
    'RP11-973F15.2\n' +
    'RP11-97N19.2\n' +
    'CTA-363E6.5\n' +
    'RP11-300J18.1\n' +
    'RP11-296L22.8\n' +
    'RP11-183I6.2\n' +
    'RP11-87G24.3\n' +
    'RP11-791M20.1\n' +
    'ITCH-IT1\n' +
    'RP1-86D1.5\n' +
    'RP11-190D6.2\n' +
    'AC006372.5\n' +
    'RP11-563K23.1\n' +
    'RP11-42A4.1\n' +
    'RP5-933B4.1\n' +
    'bP-2171C21.3\n' +
    'LINC01602\n' +
    'RP11-75C10.7\n' +
    'RP5-1027O11.1\n' +
    'RP11-385M4.1\n' +
    'RP11-297B17.3\n' +
    'LINC00927\n' +
    'RP11-667K14.9\n' +
    'RP11-789C17.3\n' +
    'RP4-784A16.4\n' +
    'CTA-796E4.4\n' +
    'RP11-445O3.3\n' +
    'ITPKB-AS1\n' +
    'RP11-794A8.1\n' +
    'RP11-332J15.2\n' +
    'RP11-236P24.3\n' +
    'FLJ41941\n' +
    'RMRP\n' +
    'RP11-165M1.2\n' +
    'AC006262.10\n' +
    'RP3-462D8.2\n' +
    'RP11-449L23.2\n' +
    'RP1-232L24.3\n' +
    'AC114765.1\n' +
    'ENOX1-AS2\n' +
    'CTD-2292M14.1\n' +
    'RP13-60M5.2\n' +
    'RP11-567L7.3\n' +
    'TCF4-AS1\n' +
    'RP11-739N10.1\n' +
    'LPP-AS1\n' +
    'RP11-299P2.1\n' +
    'ZBTB20-AS3\n' +
    'RP11-560A15.3\n' +
    'LA16c-335H7.2\n' +
    'KB-1460A1.2\n' +
    'RP11-338E21.3\n' +
    'RP11-191F9.1\n' +
    'AC007050.17\n' +
    'RP4-536B24.2\n' +
    'RP11-438D14.2\n' +
    'RP11-446F3.2\n' +
    'AC067956.1\n' +
    'LARGE-IT1\n' +
    'RP11-78L16.1\n' +
    'RP11-434D9.2\n' +
    'RP11-227H15.4\n' +
    'RP11-89K21.2\n' +
    'XXyac-YM21GA2.4\n' +
    'RP11-689C9.1\n' +
    'AC022173.2\n' +
    'CTD-2576N18.1\n' +
    'RP11-390D11.1\n' +
    'RP11-342M21.2\n' +
    'AC099552.4\n' +
    'CTD-2199O4.1\n' +
    'RP11-413H22.2\n' +
    'RP11-94A24.1\n' +
    'RP11-307L3.4\n' +
    'RP11-131J3.1\n' +
    'RP11-94M14.2\n' +
    'F11-AS1\n' +
    'RP11-168L7.1\n' +
    'BACH1-IT3\n' +
    'RP11-68L1.2\n' +
    'RP11-261N11.8\n' +
    'RP11-267N12.1\n' +
    'LINC01250\n' +
    'RP11-568A7.3\n' +
    'WWC3-AS1\n' +
    'RP11-123O10.3\n' +
    'RP11-58G13.1\n' +
    'CTB-139P11.2\n' +
    'RP11-554D15.3\n' +
    'AGBL1-AS1\n' +
    'LINC00488\n' +
    'RP11-43D4.3\n' +
    'RP4-633I8.4\n' +
    'RP11-409K20.6\n' +
    'RP11-753N8.1\n' +
    'RP11-138H8.2\n' +
    'RP1-45I4.2\n' +
    'RP11-263C24.1\n' +
    'RP11-88I21.2\n' +
    'RP11-871F6.3\n' +
    'CTD-3149D2.2\n' +
    'HRAT17\n' +
    'CLYBL-AS2\n' +
    'RP11-49O14.3\n' +
    'RP11-56N19.5\n' +
    'RP4-570O12.3\n' +
    'MIR4500HG\n' +
    'RP11-507J18.5\n' +
    'RP11-553K8.5\n' +
    'CTD-2384A14.1\n' +
    'AP000997.2\n' +
    'RP11-33N16.2\n' +
    'RP4-555D20.4\n' +
    'RP11-145G20.1\n' +
    'MAST4-IT1\n' +
    'RP11-410N8.4\n' +
    'RP11-482M8.3\n' +
    'FAM167A-AS1\n' +
    'CTB-184G21.3\n' +
    'AC068538.4\n' +
    'RP11-637C24.5\n' +
    'RP11-734K21.3\n' +
    'RP11-542G1.1\n' +
    'RP11-264L1.1\n' +
    'CTD-2199O4.5\n' +
    'RP11-351C8.1\n' +
    'LINC01448\n' +
    'RP11-1250I15.1\n' +
    'RP11-256L6.3\n' +
    'RP11-148B3.2\n' +
    'RP4-753M9.1\n' +
    'RP1-293L8.2\n' +
    'RP11-44K6.3\n' +
    'RP11-466A19.5\n' +
    'RP11-401F2.4\n' +
    'RP11-897M7.4\n' +
    'RP5-1037N22.2\n' +
    'LINC01608\n' +
    'RP11-241G9.3\n' +
    'RP11-209K10.2\n' +
    'RP11-1L9.1\n' +
    'CTD-2340D6.1\n' +
    'RP11-280H21.1\n' +
    'RP11-702F3.1\n' +
    'HMBOX1-IT1\n' +
    'RP11-162D9.3\n' +
    'LINC00945\n' +
    'RP11-14P20.1\n' +
    'RP11-16E23.3\n' +
    'RP11-399H11.2\n' +
    'RP3-437I16.1\n' +
    'AC079466.1\n' +
    'CTC-436P18.4\n' +
    'AP000770.1\n' +
    'RP11-866E20.3\n' +
    'RP1-101G11.3\n' +
    'RP11-196H14.2\n' +
    'RP11-10J21.5\n' +
    'RP1-53O8.2\n' +
    'RP11-161D15.1\n' +
    'LINC00507\n' +
    'RP11-945A11.1\n' +
    'RP11-264J4.10\n' +
    'RP11-95I16.2\n' +
    'AC114765.2\n' +
    'RP11-90D11.1\n' +
    'RP11-474I11.8\n' +
    'RP11-5L12.1\n' +
    'CTD-2043I16.1\n' +
    'AC091493.2\n' +
    'NAALADL2-AS3\n' +
    'CTD-2066L21.2\n' +
    'RP11-549L6.3\n' +
    'RP11-44F21.5\n' +
    'RP5-1119A7.17\n' +
    'RP11-800A18.4\n' +
    'LINC01405\n' +
    'RP11-445F12.2\n' +
    'RP11-456O19.2\n' +
    'RP1-170O19.17\n' +
    'RP11-83J21.3\n' +
    'RP11-753B14.1\n' +
    'CTC-465D4.1\n' +
    'RP11-14J7.6\n' +
    'AC106053.1\n' +
    'LINC01363\n' +
    'RP11-80B9.1\n' +
    'RP11-146N23.4\n' +
    'MIR137HG\n' +
    'AP000221.1\n' +
    'RP11-59O6.3\n' +
    'RP11-125D12.2\n' +
    'RP11-426J5.1\n' +
    'RP13-379O24.3\n' +
    'RP11-962G15.1\n' +
    'RP11-25C19.3\n' +
    'CTC-497E21.5\n' +
    'LINC00403\n' +
    'AC012501.2\n' +
    'RP11-404I7.2\n' +
    'RP11-99L13.1\n' +
    'MIR7515HG\n' +
    'RP11-315I14.2\n' +
    'AL592528.1\n' +
    'RP11-388K12.2\n' +
    'AL133249.1\n' +
    'PEX5L-AS2\n' +
    'RP4-681L3.2\n' +
    'CTD-2326C4.1\n' +
    'AC069394.1\n' +
    'RP4-800F24.1\n' +
    'RP11-587P21.2\n' +
    'RP1-63G5.7\n' +
    'RP11-10O22.1\n' +
    'RP11-379J5.5\n' +
    'CTB-73N10.1\n' +
    'RP11-276H1.2\n' +
    'RP5-823G15.5\n' +
    'RP11-265P11.1\n' +
    'LINC00404\n' +
    'RP5-997D24.3\n' +
    'RP11-452H21.2\n' +
    'AC084149.2\n' +
    'MYO16-AS1\n' +
    'CNOT10-AS1\n' +
    'RP11-52J3.3\n' +
    'RP11-764E7.1\n' +
    'RP11-463C8.7\n' +
    'RP5-968D22.3\n' +
    'LINC01209\n' +
    'DANT1\n' +
    'DAPK1-IT1\n' +
    'RP11-62F24.1\n' +
    'GS1-39E22.2\n' +
    'RP11-759A24.2\n' +
    'RP11-646E18.4\n' +
    'RP11-122F24.1\n' +
    'CTA-796E4.3\n' +
    'RP11-526F3.1\n' +
    'RP11-10C8.2\n' +
    'RP11-45F15.1\n' +
    'LINC00613\n' +
    'RP11-327L9.1\n' +
    'RP11-388N2.1\n' +
    'AC092625.1\n' +
    'LINC00678\n' +
    'RP11-397C12.1\n' +
    'RP11-352B15.2\n' +
    'RP11-13E5.2\n' +
    'RP11-328J6.1\n' +
    'CH507-210P18.1\n' +
    'RP11-53B5.1\n' +
    'RP11-319G6.3\n' +
    'RP11-278H7.4\n' +
    'RP13-895J2.2\n' +
    'RP11-678G15.1\n' +
    'DAB1-AS1\n' +
    'AP000462.1\n' +
    'RP11-85I21.1\n' +
    'RP11-401H2.1\n' +
    'RP11-400N13.2\n' +
    'RP11-748C4.1\n' +
    'RP13-577H12.2\n' +
    'CTD-2501M5.1\n' +
    'LL22NC03-121E8.3\n' +
    'LINC00469\n' +
    'RP11-47P18.2\n' +
    'RP1-184J9.2\n' +
    'RP11-389J22.1\n' +
    'RORA-AS2\n' +
    'LINC00261\n' +
    'RP11-545D19.1\n' +
    'CTD-2081C10.1\n' +
    'RP11-375A5.1\n' +
    'LINC01193\n' +
    'RP11-133M8.3\n' +
    'RP11-85B7.4\n' +
    'LINC01527\n' +
    'RP11-54O7.2\n' +
    'RP11-1H15.2\n' +
    'RP11-280G9.1\n' +
    'WWC2-AS1\n' +
    'RP11-219F10.1\n' +
    'RP11-816J8.1\n' +
    'AC131056.5\n' +
    'AC079135.1\n' +
    'MGC39584\n' +
    'SRGAP3-AS3\n' +
    'RP11-354E23.4\n' +
    'LINC01079\n' +
    'RP11-443N24.2\n' +
    'U95743.1\n' +
    'RP11-380M21.3\n' +
    'RP11-570L15.2\n' +
    'ATG10-AS1\n' +
    'RP11-354E23.3\n' +
    'CTC-525D6.1\n' +
    'RP11-438D14.3\n' +
    'IL20RB-AS1\n' +
    'RP11-310J24.3\n' +
    'RP11-459J23.1\n' +
    'RP11-49L2.1\n' +
    'ERVMER61-1\n' +
    'CTD-2335A18.2\n' +
    'CH507-513H4.3\n' +
    'AL078471.5\n' +
    'RP11-1007I13.4\n' +
    'CTD-2055G21.1\n' +
    'MACROD2-IT1\n' +
    'RP11-1D12.1\n' +
    'PRKCA-AS1\n' +
    'RP11-445P19.3\n' +
    'RP11-3N13.2\n' +
    'RP11-306B9.1\n' +
    'RP11-148E17.1\n' +
    'LINC01445';

  var inputs = document.getElementsByTagName("input");
        var boxs = [];
        for (let im = 0; im < inputs.length; im++) {
            if (inputs[im].type == "checkbox") {
                inputs[im].checked=false;
            }
        }
    



            document.getElementById("pf").innerHTML=" 4 options selected";
			document.getElementById("pf1").innerHTML=" 1 options selected"; 
			document.getElementById("pf2").innerHTML=" 2 options selected"; 
			document.getElementById("pf3").innerHTML=" 28 options selected"; 
			document.getElementById("pf4").innerHTML=" 1 options selected"; 
			document.getElementById("pf5").innerHTML=" 1 options selected"; 
			document.getElementById("pf6").innerHTML=" 1 options selected"; 
			document.getElementById("pf7").innerHTML=" 1 options selected"; 
			document.getElementById("pf8").innerHTML=" 1 options selected"; 
			document.getElementById("pf9").innerHTML=" 1 options selected"; 
			document.getElementById("pf10").innerHTML=" 2 options selected";
			document.getElementById("pf11").innerHTML=" 1 options selected";
			document.getElementById("pf12").innerHTML=" 1 options selected";
			document.getElementById("pf13").innerHTML=" 1 options selected";
			document.getElementById("pf14").innerHTML=" 2 options selected";
			
			document.getElementById("pf16").innerHTML=" 4 options selected"; 

			document.getElementById("box").getElementsByClassName("sa")[0].checked=true;
			document.getElementById("box").getElementsByClassName("tp")[0].checked=true;
			document.getElementById("box").getElementsByClassName("tp")[1].checked=true;
			document.getElementById("box").getElementsByClassName("tp")[2].checked=true;
			document.getElementById("box").getElementsByClassName("tp")[3].checked=true;



			document.getElementById("box1").getElementsByClassName("tp1")[1].checked=true;




			document.getElementById("box2").getElementsByClassName("sa2")[0].checked=true;
			document.getElementById("box2").getElementsByClassName("tp2")[0].checked=true;
			document.getElementById("box2").getElementsByClassName("tp2")[1].checked=true;




			document.getElementById("box3").getElementsByClassName("sa3")[0].checked=true;
			for(var j=0;j<28;j++)
			{
			document.getElementById("box3").getElementsByClassName("tp3")[j].checked=true;
			}	

			document.getElementById("box4").getElementsByClassName("tp4")[0].checked=true;
			document.getElementById("box5").getElementsByClassName("tp5")[0].checked=true;
			document.getElementById("box6").getElementsByClassName("tp6")[0].checked=true;
			document.getElementById("box7").getElementsByClassName("tp7")[0].checked=true;
			document.getElementById("box8").getElementsByClassName("tp8")[0].checked=true;
			document.getElementById("box9").getElementsByClassName("tp9")[0].checked=true;
			document.getElementById("box10").getElementsByClassName("tp10")[0].checked=true;

			document.getElementById("box10").getElementsByClassName("tp10")[2].checked=true;


			document.getElementById("box11").getElementsByClassName("tp12")[0].checked=true;


			document.getElementById("box12").getElementsByClassName("tp11")[0].checked=true;
			document.getElementById("box13").getElementsByClassName("tp13")[0].checked=true;

			document.getElementById("box14").getElementsByClassName("sa14")[0].checked=true;
			document.getElementById("box14").getElementsByClassName("tp14")[0].checked=true;
			document.getElementById("box14").getElementsByClassName("tp14")[1].checked=true;


			

			document.getElementById("box16").getElementsByClassName("sa16")[0].checked=true;
			document.getElementById("box16").getElementsByClassName("tp16")[0].checked=true;
			document.getElementById("box16").getElementsByClassName("tp16")[1].checked=true;
			document.getElementById("box16").getElementsByClassName("tp16")[2].checked=true;
			document.getElementById("box16").getElementsByClassName("tp16")[3].checked=true;





}


function fun()
{	var a=document.getElementsByName('mychk[]');	
var b=0;     
//设定一个初始值	
for(var i=0;i<a.length;i++)	
{					
if(a[i].checked==false)		
{			
	b++;   
		 //如果方框没选中，该值会累加			
} 			
	
}
if(b==a.length) 
		  //如果该值和方框的个数相同，那么就会报错			
{			
alert('Please select an option');	
 window.event.returnValue = false; 
return false;	
}	
}
	
</script>

	<style type="text/css">
		#accordion .panel-heading{
		    padding: 0;
		    border: none;
		    border-radius: 0;
		    position: relative;
		}
		#accordion .panel-title p{
		    display: block;
		    padding: 15px 10%;
		    margin: 0;
		    background: #1a2235;
		    font-size: 18px;
		    font-weight: 700;
		    letter-spacing: 1px;
		    color: #fff;
		    border-radius: 0;
		    position: relative;
		}
		#accordion .panel-title a.collapsed{ 
			background: #1c2336;}
		#accordion .panel-title a:before,
		
		
		
	

		#accordion .panel-body{
		    border-left: 3px 
		    solid #1a2235;
		    border-top: none;
		    background: #fff;
		    font-size: 17px;
		    color: #1c2336;
		    line-height: 27px;
		    position: relative;
		}
		#accordion .panel-body:before{
		    content: "";
		    height: 3px;
		    width: 100%;
		    background: #1a2235;
		    position: absolute;
		    bottom: 0;
		    left: 0;
		}
		.btn-w3r {
			
			
			
			background: #50d8af;

			/* W3C */
			color:white;
  			-webkit-transition: all .5s; 

                -moz-transition: all .5s; 

                -ms-transition: all .5s; 

                -o-transition: all .5s; 

                transition: all .7s;

		}
		.btn-w3r:hover {
			color:#50d8af;
			background-color: white;
			border: 1px solid #50d8af;

		}     		
        		
		.btn-w4r {
			
			
			
			background: #50d8af;

			/* W3C */
			color:white;
  			-webkit-transition: all .5s; 

                -moz-transition: all .5s; 

                -ms-transition: all .5s; 

                -o-transition: all .5s; 

                transition: all .7s;
margin-top: 12px;
		}
		.btn-w4r:hover {
			color:#50d8af;
			background-color: white;
			border: 1px solid #50d8af;

		}     		
        		   


		.hr1{ height:1px;border:none;border-top:3px solid #346191;}

	.navbot {
    height:5px;
    width:100%;
    background: -webkit-linear-gradient(#D3D3D3, #fff); /* Safari 5.1 - 6.0 */
    background: -o-linear-gradient(#D3D3D3, #fff); /* Opera 11.1 - 12.0 */
    background: -moz-linear-gradient(#D3D3D3, #fff); /* Firefox 3.6 - 15 */
    background: linear-gradient(#D3D3D3, #fff); /* 标准的语法,必须放最后 */
		}
        .alert-info{
            color:
                    #31708f;
            background-color:
                    #cfe9ed;
            border-color:
                    #37c0c7;
        }
        
        
      
      
 
			/*.file-box{
				display: inline-block;
				position: relative;
				padding: 3px 5px;
				overflow: hidden;
				color:#fff;
				background-color: #50d8af;
font-weight: 900;
			}
			.file-btn{
				position: absolute;
				width: 100%;
				height: 100%;
				top: 0;
    			left: 0;
    			outline: none;
    			background-color: transparent;
    			filter:alpha(opacity=0);
				-moz-opacity:0;
				-khtml-opacity: 0;
				opacity: 0;
			}*/
	
  .file-box input{ vertical-align:middle; margin:0; padding:0}
.file-box{ position:relative;width:340px}
.file-box .txt{ height:22px; border:1px solid #cdcdcd; width:180px;}
.file-box .btn{ background-color:#FFF; border:1px solid #CDCDCD;height:24px; width:70px;}
.file-box .file{ position:absolute; top:0; right:80px; height:24px; filter:alpha(opacity:0);opacity: 0;width:260px }

      textarea.form-control {
    height: 114px;
}
      
     .btn-default {
    color: #333;
    background-color: #d5eee2;
    border-color: #ccc;
}   
        
        
	</style>
	
<script type="text/javascript">
 
function doit(x,y)
{  
var n=0;
var objs = document.getElementsByClassName(x); 
  for(var i=0; i<objs.length; i++)   
      {
    if(objs[i].checked) 
                  {
                  n++;
                  } 
                }
  document.getElementById(y).innerHTML=" "+n+" options selected";
}
</script>
</head>
<body ><!-- 重置样本查询必须要的-->

<body id="body">
<?php 


$dir = "/var/www/html/LncSEA/analysis/upfile/";
$namearr=[];
// 打开目录，然后读取其内容
$nar=0;
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){

    	if($file!=".."&&$file!=".")
    	{
      	echo "filename:" . $file . "<br>";
      	$namearr[$nar]=$file;
      	$nar=$nar+1;
  		}

    }
    closedir($dh);
  }
}
 

print_r($namearr);


for($sch=0;$sch<count($namearr);$sch++ )
{
unlink('/var/www/html/LncSEA/analysis/upfile/'.$namearr[$sch].'');
}


?>

<!--==========================
  Header
============================-->
<header id="header"  style="position: fixed;z-index: 1;top:0;display: block;width:  100%;">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Lnc<span>SEA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li  class="menu-active"><a href="Analysis.php">Analysis</a></li>
                <li><a href="Search.php">Search</a></li>
                <li><a href="data-browse.php">Browse</a></li>
<li><a href="/LncSEA/id_conversion.php">ID conversion</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="help.php">Help</a></li>
                <li class="menu-has-children"><a href="http://www.licpathway.net/">Contact</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<form action="analysis/pass.php" method="post" target="_blank" autocomplete="off" style="margin-top: 30px" enctype="multipart/form-data">
<div class="container-fluid">

	<!--<div class="row">
		<div class="col-lg-5 col-md-offset-6">
			<ol class="breadcrumb text-right" style="background-color:#ffffff;">
				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
				<li><a href="index.php">Home</a></li>
			</ol>
		</div>
	</div>	-->

	
  <div class="row">
  		<div class="col-lg-5 col-lg-offset-1">
  		<!--<div class="col-lg-12 col-lg-offset-1">
  		<label><div  class="btn btn-w3r" ><font size="4" >Submit your LncRNA List to Enrichment Analysis</font></div></label>	
  		</div>	-->
<!--<div >
		
		</div>	-->


  		<div class="row">
  		<div class="col-lg-12 ">
  		<div class="form-group">
  	    <input type="radio" checked id="radio_text" name="me" value="a1">
		<b><font style="font-size: 120%;margin-left: %;margin-bottom: 0px;">Paste a list:</font></b>
		<textarea class="form-control" rows="12" id="input" name="input" spellcheck="false"></textarea>
            <script>
                $("#input").val("<?php echo preg_replace("/[\s]+/i","\\n",trim($_REQUEST['params'])) ?>")
            </script>
		<button style="margin-left: 5%;float:right" type="button" class="btn btn-w4r" onclick="return forexmple()";><font  size="2"><strong>Example</strong></font></button>
		<div>
			</br>
		
			
			
        <div style="margin-bottom: 20px;margin-top: 40px;">
        <input type="radio" id="radio_file" name="me" value="a2"> 
		<b><font style="font-size: 120%;margin-left: %;margin-bottom: 0px;">File upload:</font></b>
      
   

		<div class="file-box">
			
<input type='text' name='textfield' id='textfield' class='txt' />  
<input type='button' class='btn' value='upload' />
<input type="file" name="file" class="file" id="file" size="38" onchange="document.getElementById('textfield').value=this.value" />
 <!--<input type="submit" name="submit" class="btn" value="上传" />-->

     </div>

           <a class="btn btn-default" style="height: 28px;padding:3px 12px;border-radius: 0;" href="examplel_lncRNA_list.csv">Example of upload file</a>

     <hr>
     
     
          <!--<div class="file">-->
         <!--<input type="file" name="file" id="file"  style="width: 30%;margin-right: 5%;margin-bottom:px;float: right;">--> 
</div>
		<!--</div>-->
</div>




<div>		
	<b><font style="font-size: 100%;padding-left:16%;">Min<i class="glyphicon glyphicon-question-sign" title="The minimum number of genes in a reference set"></i>:</font></b>
	 <input type="text" class="form-control" name="min" id="min" value="" placeholder="Unlimited" style="width: 15%;margin-right: 50%;float: right;" />

<label style="margin-right:-50%;margin-top:-3px;float: right;margin-left:320px;" >Background:</label>

</div>
	<div style="margin-top: 4%;">		
	<b><font style="font-size: 100%;padding-left:16%;">Max<i class="glyphicon glyphicon-question-sign" title="The maximum number of lncRNAs in a reference setf"></i>:</font></b>
	 <input type="text" class="form-control" name="max" id="max" value="" placeholder="Unlimited" style="width: 15%;margin-right: 50%;float: right;" />
		<select style="width: 30%;margin-right: -50%;margin-right:-65%;margin-top:-3px;float: right;"  name="bg" id="bg" >
				<option value="All lncRNA">LncRNAs of LncSEA</option>
				<option value="GENCODE">LncRNAs of GENCODE</option>
														
		</select>	
		
		</div>

	<div style="margin-top: 4%;"> 	
     <b><font style="font-size: 100%;padding-left:16%;display: inline;"> P-value<i class="glyphicon glyphicon-question-sign" title="Hypergeometric P value."></i>:</font></b>
	 <input type="text" class="form-control" name="pvalue" id="pvalue" value="0.01" placeholder="<0.01" style="width: 15%;margin-right: 50%;float: right;" />
	</div>	

	<div style="margin-top: 4%;">
		
<b><font style="font-size: 100%;padding-left:16%;"> BH<i class="glyphicon glyphicon-question-sign" title="Adjusted p value with FalseDiscovery Rate method."></i>:</font></b>
	 <input type="text" class="form-control" name="FDR" id="FDR" value="0.05" placeholder="<0.05" style="width: 15%;margin-right: 50%;float: right;" />
	<button style="margin-right:-65%;;margin-top:-3px;float: right;" type="Reset" class="btn btn-w4r" onclick="Resetsel()"><font  size="3"><strong>Reset</strong></font></button>
	 <button style="margin-right:-52%;;margin-top:-3px;float: right;" type="Submit" class="btn btn-w4r" onclick="javascript:fun();mycheck()" ><font  size="3"><strong>Run</strong></font></button>
	
	
	</div>	

	<div style="margin-top: 4%;">
		
<b><font style="font-size: 100%;padding-left:16%;"> Bonferroni<i class="glyphicon glyphicon-question-sign" title="Adjusted p value with FalseDiscovery Rate method."></i>:</font></b>
	 <input type="text" class="form-control" name="Bonferroni" id="Bonferroni" value="0.05" placeholder="<0.05" style="width: 15%;margin-right: 50%;float: right;" />
	</div>


	
	
<div >
			<!--<button style="margin-left: 2%;width:1 px;" type="button"class="btn btn-w4r" onclick="return function()";><font  size="3"><strong> Example1</strong></font></button>
			<button style="margin-left: 2%;" type="button"class="btn btn-w4r" onclick="return forexmple()";><font  size="3"><strong> Example2</strong></font></button>
			<button style="margin-left: 2%;" type="button"class="btn btn-w4r" onclick="return forexmple()";><font  size="3"><strong> Example3</strong></font></button>-->

		<!--<div >
			<button style="margin-left: 100px;" type="Submit" class="btn btn-w4r" onclick="javascript:fun();mycheck()" ><font  size="3"><strong>RUN</strong></font></button>
			<button style="margin-left: 2%;" type="Reset" class="btn btn-w4r" onclick="Resetsel()"><font  size="3"><strong>Reset</strong></font></button>
			
		</div>	-->
	
		</div>		

</table>
	</div>
  		</div>	


  		</div>
<div class="row" >
<div class="col-lg-12 " style="text-align: justify;">
<font style="font-size: 30px;color: red">*Tips</font><br>
<p><font color="green"><b>LncSEA provides the differential lncRNAs (log2FC>1, P<0.05) of breast invasive carcinoma from TCGA project as input example list file and selects recommended category options for analysis. Users can also set different thresholds as needed for analysis, such as hypergeometric test p value and adjust p value. User can obtain the analysis results within a short time and download results (files and graphs) as needed.</b>
    </font>
</p>

</div>	

</div>



  		</div>









  	<div class="col-lg-6 " >
  		
  		<div class="col-lg-12">
  								
  	<table width="100%">    	
   	<tr>
   	<td></td>	
   	<td>
   		<button type="button" href="#" type="button" class="btn btn-w3r" id="All" onclick="AllOpen(this,'box','box1','box2','box3','box4','box5','box6','box7','box8','box9','box10','box11','box12','box13','box14','box15','box16','box17','box18')" style="border: 1px solid #50d8af">
            <span style="font-size: medium; ">Open all</span>
   		</button>
  	<button type="button" class="btn btn-w3r" onclick="CheckAll(this)" id="1"><span style="font-size: medium; ">Check all</span></button>
   	</td>
   	</tr>
   	</table>
  		</div>

  		<div style="overflow-y: auto;height:721px;" class="col-lg-12">
  		<div class="col-lg-11" >
  		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d" onclick="openShutManager(this,'box');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Disease</font>
  		<font id="pf">0 options selected</font><a href="help.php#Disease" class="glyphicon glyphicon-info-sign"></a>

		<div id="box" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa" onclick="sa('box','tp','sa','pf')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>
			
		<tr>
			<td><input type="checkbox"  name="mychk[]"  value="Disease-LncRNADisease2.0"  class="tp"  onclick="javascript:doit('tp','pf');"></td><td>LncRNADisease<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox"  name="mychk[]"  value="Disease-MNDR2.0"  class="tp"  onclick="javascript:doit('tp','pf');"></td><td>MNDR<span class="glyphicon glyphicon-list-alt"></span></td></tr>

		<tr>
			<td><input type="checkbox"  name="mychk[]"  value="Disease-Lnc2Cancer2.0"  class="tp"  onclick="javascript:doit('tp','pf');"></td><td>Lnc2Cancer<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox"  name="mychk[]"  value="Disease-EVLncRNAs"    class="tp"  onclick="javascript:doit('tp','pf');">
		</td><td>EVLncRNAs<span class="glyphicon glyphicon-list-alt"></span></td></tr>

		

		
		</table>
		</div>
		</div>  		








  		<div class="col-lg-11">
  		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d1" onclick="openShutManager(this,'box1');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Drug</font>
  		<font id="pf1">0 options selected</font><a href="help.php#Drug" class="glyphicon glyphicon-info-sign"></a>
		<div id="box1" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa1" onclick="sa('box1','tp1','sa1','pf1')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>	
		<tr>
			<td><input type="checkbox" name="mychk[]" class="tp1" value="Drug-Lnc2Cancer" onclick="javascript:doit('tp1','pf1');"></td><td>Lnc2Cancer<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox" name="mychk[]" class="tp1" value="Drug-LncMap" onclick="javascript:doit('tp1','pf1');"></td><td>LncMap<span class="glyphicon glyphicon-list-alt"></span></td></tr>
		
			
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d2" onclick="openShutManager(this,'box2');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">MicroRNA</font>
  		<font id="pf2">0 options selected</font><a href="help.php#MicroRNA" class="glyphicon glyphicon-info-sign"></a>

		<div id="box2" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa2" onclick="sa('box2','tp2','sa2','pf2')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr>
			<td><input type="checkbox" name="mychk[]" class="tp2" value="MicroRNA-starbase" onclick="javascript:doit('tp2','pf2');"></td><td>StarBase<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox" name="mychk[]" class="tp2" value="MicroRNA-lncbase" onclick="javascript:doit('tp2','pf2');"></td><td>LncBase<span class="glyphicon glyphicon-list-alt"></span></td></tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d3" onclick="openShutManager(this,'box3');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Cancer Phenotype</font>
  		<font id="pf3">0 options selected</font><a href="help.php#Cancer_phenotype" class="glyphicon glyphicon-info-sign"></a>

		<div id="box3" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa3" onclick="sa('box3','tp3','sa3','pf3')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>	
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Adrenocortical_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Adrenocortical carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Breast_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Breast Carcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Carcinoma_of_bladder" onclick="javascript:doit('tp3','pf3');"></td><td>Carcinoma of bladder</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Cervical_Squamous_Cell_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Cervical Squamous Cell Carcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Colon_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Colon Carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Colorectal_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Colorectal Carcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Cutaneous_Melanoma" onclick="javascript:doit('tp3','pf3');"></td><td>Cutaneous Melanoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Endometrial_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Endometrial Carcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Esophageal_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Esophageal carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Glioblastoma" onclick="javascript:doit('tp3','pf3');"></td><td>Glioblastoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Glioma" onclick="javascript:doit('tp3','pf3');"></td><td>Glioma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Leukemia" onclick="javascript:doit('tp3','pf3');"></td><td>Leukemia</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Liver_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Liver carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Lung_adenocarcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Lung adenocarcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Lung_squamous_cell_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Lung squamous cell carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Malignant_neoplasm_of_colon_with_rectum" onclick="javascript:doit('tp3','pf3');"></td><td>Malignant neoplasm of colon with rectum</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Mesothelioma" onclick="javascript:doit('tp3','pf3');"></td><td>Mesothelioma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Ovarian_Serous_Adenocarcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Ovarian Serous Adenocarcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Pancreatic_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Pancreatic carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Pheochromocytoma_and_Paraganglioma" onclick="javascript:doit('tp3','pf3');"></td><td>Pheochromocytoma and Paraganglioma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Prostate_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Prostate carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Renal_Cell_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Renal Cell Carcinoma</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Sarcoma" onclick="javascript:doit('tp3','pf3');"></td><td>Sarcoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Squamous_cell_carcinoma_of_the_head_and_neck" onclick="javascript:doit('tp3','pf3');"></td><td>Squamous cell carcinoma of the head and neck</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Stomach_Carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Stomach Carcinoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Testicular_Germ_Cell_Tumor" onclick="javascript:doit('tp3','pf3');"></td><td>Testicular Germ Cell Tumor</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Uveal_melanoma" onclick="javascript:doit('tp3','pf3');"></td><td>Uveal melanoma</td>
			<td><input type="checkbox" class="tp3" name="mychk[]" value="Cancer_Phenotype-Thyroid_carcinoma" onclick="javascript:doit('tp3','pf3');"></td><td>Thyroid carcinoma</td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d4" onclick="openShutManager(this,'box4');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Enhancer</font>
  		<font id="pf4">0 options selected</font><a href="help.php#Enhancer_and_super_enhancer" class="glyphicon glyphicon-info-sign"></a>

		<div id="box4" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa4" onclick="sa('box4','tp4','sa4','pf4')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr>
			<td><input type="checkbox" class="tp4" name="mychk[]" value="Enhancer-ROSE_Overlap" onclick="javascript:doit('tp4','pf4');"></td><td>Overlap</td>
			<td><input type="checkbox" class="tp4" name="mychk[]" value="Enhancer-ROSE_Proximal" onclick="javascript:doit('tp4','pf4');"></td><td>Proximal</td></tr>
		<tr>
			<td><input type="checkbox" class="tp4" name="mychk[]" value="Enhancer-ROSE_Closest" onclick="javascript:doit('tp4','pf4');"></td><td>Closest</td>
			<td></td><td></td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d5" onclick="openShutManager(this,'box5');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Super Enhancer</font>
  		<font id="pf5">0 options selected</font><a href="help.php#Enhancer_and_super_enhancer" class="glyphicon glyphicon-info-sign"></a>
		<div id="box5" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa5" onclick="sa('box5','tp5','sa5','pf5')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr>
			<td><input type="checkbox" class="tp5" name="mychk[]" value="Super_Enhancer-ROSE_Overlap" onclick="javascript:doit('tp5','pf5');"></td><td>Overlap</td>
			<td><input type="checkbox" class="tp5" name="mychk[]" value="Super_Enhancer-ROSE_Proximal" onclick="javascript:doit('tp5','pf5');"></td><td>Proximal</td>
		</tr>
		<tr><td><input type="checkbox" class="tp5" name="mychk[]" value="Super_Enhancer-ROSE_Closest" onclick="javascript:doit('tp5','pf5');"></td><td>Closest</td>
		<td><input type="checkbox" class="tp5" name="mychk[]" value="Super_Enhancer-Closest_active" onclick="javascript:doit('tp5','pf5');"></td><td>Closest active</td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d6" onclick="openShutManager(this,'box6');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Accessible Chromatin</font>
  		<font id="pf6">0 options selected</font><a href="help.php#Accessible_chromatin" class="glyphicon glyphicon-info-sign"></a>
		<div id="box6" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa6" onclick="sa('box6','tp6','sa6','pf6')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>

		<tr>
			<td><input type="checkbox" class="tp6" name="mychk[]" value="Accessible_Chromatin-Overlap" onclick="javascript:doit('tp6','pf6');"></td><td>Overlap</td>
			<td><input type="checkbox" class="tp6" name="mychk[]" value="Accessible_Chromatin-PROXIMAL" onclick="javascript:doit('tp6','pf6');"></td><td>Proximal</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp6" name="mychk[]" value="Accessible_Chromatin-CLOSEST" onclick="javascript:doit('tp6','pf6');"></td><td>Closest</td>
			<td></td><td></td>
		</tr>
		
		</table>
		</div>
		</div>



		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d7" onclick="openShutManager(this,'box7');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Cell Marker</font>
  		<font id="pf7">0 options selected</font><a href="help.php#Cell_Marker" class="glyphicon glyphicon-info-sign"></a>
		<div id="box7" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="tp7" name="mychk[]" value="Cell_Marker-_" onclick="javascript:doit('tp7','pf7');"></td><td>Cell Marker</td>
			<td></td><td></td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d8" onclick="openShutManager(this,'box8');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Subcellular Localization</font>
  		<font id="pf8">0 options selected</font><a href="help.php#Subcellular_localization" class="glyphicon glyphicon-info-sign"></a>
		<div id="box8" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa8" onclick="sa('box8','tp8','sa8','pf8')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr>
			<td><input type="checkbox" class="tp8" name="mychk[]" value="Subcellular_Location-RNALocate" onclick="javascript:doit('tp8','pf8');"></td><td>RNALocate<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox" class="tp8" name="mychk[]" value="Subcellular_Location-iLoc-lncRNA" onclick="javascript:doit('tp8','pf8');"></td><td>iLoc-lncRNA<span class="glyphicon glyphicon-list-alt"></span></td></tr>
		</table>
		</div>
		</div>


		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d9" onclick="openShutManager(this,'box9');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Cancer Hallmark</font>
  		<font id="pf9">0 options selected</font><a href="help.php#Cancer_Hallmark" class="glyphicon glyphicon-info-sign"></a>
		<div id="box9" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="tp9" name="mychk[]" value="Cancer_Hallmark-_" onclick="javascript:doit('tp9','pf9');"></td><td>Cancer Hallmark</td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d10" onclick="openShutManager(this,'box10');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Transcription Factor</font>
  		<font id="pf10">0 options selected</font><a href="help.php#Transcription_factor" class="glyphicon glyphicon-info-sign"></a>
		<div id="box10" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa10" onclick="sa('box10','tp10','sa10','pf10')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>
			
		<tr>
			<td><input type="checkbox" class="tp10" name="mychk[]" value="Transcription_Factor-enhancer" onclick="javascript:doit('tp10','pf10');"></td><td>Enhancer</td>
			<td><input type="checkbox" class="tp10" name="mychk[]" value="Transcription_Factor-Accessible_chromatin" onclick="javascript:doit('tp10','pf10');"></td><td>Accessible Chromatin</td>
		</tr>
		<tr>
		<td><input type="checkbox" class="tp10" name="mychk[]" value="Transcription_Factor-Promoter_2kb/1kb" onclick="javascript:doit('tp10','pf10');"></td><td>Promoter_2kb/1kb</td>
		<td><input type="checkbox" class="tp10" name="mychk[]" value="Transcription_Factor-Promoter_5kb/1kb" onclick="javascript:doit('tp10','pf10');"></td><td>Promoter_5kb/1kb</td>
		</tr>	
		<tr>
		<td><input type="checkbox" class="tp10" name="mychk[]" value="Transcription_Factor-Promoter_10kb/1kb" onclick="javascript:doit('tp10','pf10');"></td><td>Promoter_10kb/1kb</td>
		<td><input type="checkbox" class="tp10" name="mychk[]" value="Transcription_Factor-Promoter_20kb/1kb" onclick="javascript:doit('tp10','pf10');"></td><td>Promoter_20kb/1kb</td>
		</tr>	
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d12" onclick="openShutManager(this,'box12');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Methylation Pattern</font>
  		<font id="pf11">0 options selected</font><a href="help.php#Methylation_pattern" class="glyphicon glyphicon-info-sign"></a>
		<div id="box12" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="tp11" name="mychk[]" value="Methylation_Pattern-_" onclick="javascript:doit('tp11','pf11');"></td><td>Methylation Pattern</td>
			<td></td><td></td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d11" onclick="openShutManager(this,'box11');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">RNA Binding Protein</font>
  		<font id="pf12">0 options selected</font><a href="help.php#RBP" class="glyphicon glyphicon-info-sign"></a>
		<div id="box11" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa11" onclick="sa('box11','tp12','sa11','pf12')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr><td><input type="checkbox" class="tp12" name="mychk[]" value="RNA_Binding_Protein-RNAInter" onclick="javascript:doit('tp12','pf12');"></td><td>RNAInter<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox" class="tp12" name="mychk[]" value="RNA_Binding_Protein-EuRBPDB" onclick="javascript:doit('tp12','pf12');"></td><td>EuRBPDB<span class="glyphicon glyphicon-list-alt"></span></td></tr>
		<tr><td><input type="checkbox" class="tp12" name="mychk[]" value="RNA_Binding_Protein-starBasev2.0" onclick="javascript:doit('tp12','pf12');"></td><td>StarBase<span class="glyphicon glyphicon-list-alt"></span></td>
			<td></td><td></td>
		</tr>
		</table>
		</div>
		</div>



		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d13" onclick="openShutManager(this,'box13');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">Survival</font>
  		<font id="pf13">0 options selected</font><a href="help.php#Survival" class="glyphicon glyphicon-info-sign"></a>
		<div id="box13" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
			
		<tr>
			<td><input type="checkbox" class="tp13" name="mychk[]" value="Survival-_" onclick="javascript:doit('tp13','pf13');"></td><td>Survival</td>
			<td></td><td></td>
		</tr>
		</table>
		</div>
		</div>

		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d14" onclick="openShutManager(this,'box14');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">SmORF</font>
  		<font id="pf14">0 options selected</font><a href="help.php#Small_ORF" class="glyphicon glyphicon-info-sign"></a>
		<div id="box14" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa14" onclick="sa('box14','tp14','sa14','pf14')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr>
			<td><input type="checkbox" class="tp14" name="mychk[]" value="SmORF-sor.forg" onclick="javascript:doit('tp14','pf14');"></td><td>sorf.org<span class="glyphicon glyphicon-list-alt"></span></td>
			<td><input type="checkbox" class="tp14" name="mychk[]" value="SmORF-SmProt" onclick="javascript:doit('tp14','pf14');"></td><td>SmProt<span class="glyphicon glyphicon-list-alt"></span></td>
		</tr>	
			
		</table>
		</div>
		</div>



        <div class="col-lg-11">
        <label></label> 
        <i class="icicon ion-plus-circled btn-lg" id="d15" onclick="openShutManager(this,'box15');" style="cursor:pointer;"></i>
        <font style="font-size: 25px;">Exosome</font>
        <font id="pf15">0 options selected</font><a href="help.php#Exosome" class="glyphicon glyphicon-info-sign"></a>
        <div id="box15" style="display:none;" class="alert alert-info alert-dismissable">
        <table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">          
        <tr>
            <td><input type="checkbox" class="tp15" name="mychk[]" value="Exosome-_" onclick="javascript:doit('tp15','pf15');"></td><td>Exosome<span class="glyphicon glyphicon-list-alt"></span></td>
        </tr>   
            
        </table>
        </div>
        </div>
		





		<div class="col-lg-11">
		<label></label>	
  		<i class="icicon ion-plus-circled btn-lg" id="d16" onclick="openShutManager(this,'box16');" style="cursor:pointer;"></i>
  		<font style="font-size: 25px;">eQTL</font>
		<font id="pf16">0 options selected</font><a href="help.php#EQTL" class="glyphicon glyphicon-info-sign"></a>
		<div id="box16" style="display:none;" class="alert alert-info alert-dismissable">
		<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
		<tr>
			<td><input type="checkbox" class="sa16" onclick="sa('box16','tp16','sa16','pf16')"></td>
			<td><font style="color: red">Select all</font></td>
			<td></td>
			<td></td>
		</tr>			
		<tr>
			<td><input type="checkbox" class="tp16" name="mychk[]" value="EQTL-Common_Cis" onclick="javascript:doit('tp16','pf16');"></td><td>Common cis</td>
			<td><input type="checkbox" class="tp16" name="mychk[]" value="EQTL-Common_Trans" onclick="javascript:doit('tp16','pf16');"></td><td>Common trans</td>
		</tr>
		<tr>
			<td><input type="checkbox" class="tp16" name="mychk[]" value="EQTL-GWAS_Cis" onclick="javascript:doit('tp16','pf16');"></td><td>GWAS cis</td>
			<td><input type="checkbox" class="tp16" name="mychk[]" value="EQTL-GWAS_Trans" onclick="javascript:doit('tp16','pf16');"></td><td>GWAS trans</td>
		</tr>


		</table>
		</div>
		</div>
	
	
	
	
	<div class="col-lg-11">
	<label></label>	
	<i class="icicon ion-plus-circled btn-lg" id="d17" onclick="openShutManager(this,'box17');" style="cursor:pointer;"></i>
	<font style="font-size: 25px;">Conservation</font>
	<font id="pf17">0 options selected</font><a href="help.php#conservation" class="glyphicon glyphicon-info-sign"></a>
	<div id="box17" style="display:none;" class="alert alert-info alert-dismissable">
	<table class="table table-hover" style="background-color: white;margin-left: 2%;margin-top:2%; ">
	<tr>
		<td><input type="checkbox" class="sa17" onclick="sa('box17','tp17','sa17','pf17')"></td>
		<td><font style="color: red">Select all</font></td>
		<td></td>
		<td></td>
	</tr>			
	<tr><td><input type="checkbox" class="tp17" name="mychk[]" value="Conservation-100_vertebrates" onclick="javascript:doit('tp17','pf17');"></td><td>100_vertebrates<span class="glyphicon glyphicon-list-alt"></span></td>
		<td><input type="checkbox" class="tp17" name="mychk[]" value="Conservation-20_mammals" onclick="javascript:doit('tp17','pf17');"></td><td>20_mammals<span class="glyphicon glyphicon-list-alt"></span></td></tr>
	<tr><td><input type="checkbox" class="tp17" name="mychk[]" value="Conservation-7_vertebrates" onclick="javascript:doit('tp17','pf17');"></td><td>7_vertebrates<span class="glyphicon glyphicon-list-alt"></span></td>
		<td></td><td></td>
	</tr>
	</table>
	</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	</div>

	</div>




  			
  		</div>

  </div>

</form>






<script type="text/javascript">
function openShutManager(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){

var sourceObj = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;

var targetObj = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;

var openTip = oOpenTip || "";

var shutTip = oShutTip || "";

if(targetObj.style.display!="none"){

   if(shutAble) return;

   targetObj.style.display="none";
   document.getElementById(sourceObj.id).className="icicon ion-plus-circled btn-lg";

   if(openTip  &&  shutTip){

    sourceObj.innerHTML = shutTip; 

   }

} else {

   targetObj.style.display="block";
      document.getElementById(sourceObj.id).className="icon ion-minus-circled btn-lg";


   if(openTip  &&  shutTip){

    sourceObj.innerHTML = openTip; 

   }

}

}

</script>

    <script type="text/javascript">
        /* $("#all").click(function(){
            alert("11111111");
            if(this.checked){
                alert("2222");
                $("mychk[]").prop("checked",true);
            }else{
                $("mychk[]").prop("checked",false);
            }
        
        }); */
        function chk(){
            var all = document.getElementById("inlineCheckbox2");
            var mychk = document.getElementsByName("mychk[]");
            if(all.checked==true){
                if(mychk.length){
                    for(var i=0;i<mychk.length;i++){
                        mychk[i].checked = true;
                        document.getElementById("pf").innerHTML=" 4 options selected";

            document.getElementById("pf1").innerHTML=" 2 options selected"; 
			document.getElementById("pf2").innerHTML=" 2 options selected"; 
			document.getElementById("pf3").innerHTML=" 28 options selected"; 
			document.getElementById("pf4").innerHTML=" 3 options selected"; 
			document.getElementById("pf5").innerHTML=" 4 options selected"; 
			document.getElementById("pf6").innerHTML=" 3 options selected"; 
			document.getElementById("pf7").innerHTML=" 1 options selected"; 
			document.getElementById("pf8").innerHTML=" 2 options selected"; 
			document.getElementById("pf9").innerHTML=" 1 options selected"; 
			document.getElementById("pf10").innerHTML=" 1 options selected";
			document.getElementById("pf11").innerHTML=" 6 options selected";
			document.getElementById("pf12").innerHTML=" 3 options selected";
			document.getElementById("pf13").innerHTML=" 1 options selected";
			document.getElementById("pf14").innerHTML=" 2 options selected";
			document.getElementById("pf15").innerHTML=" 2 options selected";
			
			document.getElementById("pf16").innerHTML=" 4 options selected";
       
                    }
                
                }
                mychk.chcked=true;
            }else{
                if(mychk.length){
                    for(var i=0;i<mychk.length;i++){
                        mychk[i].checked = false;
            document.getElementById("pf").innerHTML=" 0 options selected";
			document.getElementById("pf1").innerHTML=" 0 options selected"; 
			document.getElementById("pf2").innerHTML=" 0 options selected"; 
			document.getElementById("pf3").innerHTML=" 0 options selected"; 
			document.getElementById("pf4").innerHTML=" 0 options selected"; 
			document.getElementById("pf5").innerHTML=" 0 options selected"; 
			document.getElementById("pf6").innerHTML=" 0 options selected"; 
			document.getElementById("pf7").innerHTML=" 0 options selected"; 
			document.getElementById("pf8").innerHTML=" 0 options selected"; 
			document.getElementById("pf9").innerHTML=" 0 options selected"; 
			document.getElementById("pf10").innerHTML=" 0 options selected";
			document.getElementById("pf11").innerHTML=" 0 options selected";
			document.getElementById("pf12").innerHTML=" 0 options selected";
			document.getElementById("pf13").innerHTML=" 0 options selected";
			document.getElementById("pf14").innerHTML=" 0 options selected";
			document.getElementById("pf15").innerHTML=" 0 options selected";
			
			document.getElementById("pf16").innerHTML=" 0 options selected";  
							 document.getElementById("pf17").innerHTML=" 0 options selected";  
		}
                
                }
            }
            
        }   
    </script>







<script type="text/javascript">

function AllOpen(wenzi,box,box1,box2,box3,box4,box5,box6,box7,box8,box9,box10,box11,box12,box13,box14,box15,box16,box17,box18,shutAble,op,os){

var sourceObj = typeof wenzi == "string" ? document.getElementById(wenzi) : wenzi;

var targetObj = typeof box == "string" ? document.getElementById(box) : box;
var targetObj1 = typeof box1 == "string" ? document.getElementById(box1) : box1;   
var targetObj2 = typeof box2 == "string" ? document.getElementById(box2) : box2;   
var targetObj3 = typeof box3 == "string" ? document.getElementById(box3) : box3;    
 var targetObj4 = typeof box4 == "string" ? document.getElementById(box4) : box4;   
 var targetObj5 = typeof box5 == "string" ? document.getElementById(box5) : box5;     
 var targetObj6 = typeof box6 == "string" ? document.getElementById(box6) : box6;     
 var targetObj7 = typeof box7 == "string" ? document.getElementById(box7) : box7;     
 var targetObj8 = typeof box8 == "string" ? document.getElementById(box8) : box8;     
 var targetObj9 = typeof box9 == "string" ? document.getElementById(box9) : box9;     
 var targetObj10 = typeof box10 == "string" ? document.getElementById(box10) : box10; 
 var targetObj11 = typeof box11 == "string" ? document.getElementById(box11) : box11; 
 var targetObj12 = typeof box12 == "string" ? document.getElementById(box12) : box12; 
 var targetObj13 = typeof box13 == "string" ? document.getElementById(box13) : box13; 
 var targetObj14 = typeof box14 == "string" ? document.getElementById(box14) : box14;  
 var targetObj15 = typeof box15 == "string" ? document.getElementById(box15) : box15;
 
 var targetObj16 = typeof box16 == "string" ? document.getElementById(box16) : box16; 
 var targetObj17 = typeof box17 == "string" ? document.getElementById(box17) : box17; 


var openTip = op || "";

var shutTip = os || "";

if(targetObj.style.display!="none"){

   if(shutAble) return;

targetObj.style.display="none";
targetObj1.style.display="none"; 
targetObj2.style.display="none";
targetObj3.style.display="none";
targetObj4.style.display="none";
targetObj5.style.display="none";
targetObj6.style.display="none";
targetObj7.style.display="none";
targetObj8.style.display="none";
targetObj9.style.display="none"; 
targetObj10.style.display="none";
targetObj11.style.display="none";
targetObj12.style.display="none";
targetObj13.style.display="none";
targetObj14.style.display="none";
targetObj15.style.display="none";

targetObj16.style.display="none";
targetObj17.style.display="none";
document.getElementById("d").className="icicon ion-plus-circled btn-lg";
document.getElementById("d1").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d2").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d3").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d4").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d5").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d6").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d7").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d8").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d9").className="icicon ion-plus-circled btn-lg"; 
document.getElementById("d10").className="icicon ion-plus-circled btn-lg";
document.getElementById("d11").className="icicon ion-plus-circled btn-lg";
document.getElementById("d12").className="icicon ion-plus-circled btn-lg";
document.getElementById("d13").className="icicon ion-plus-circled btn-lg";
document.getElementById("d14").className="icicon ion-plus-circled btn-lg";
document.getElementById("d15").className="icicon ion-plus-circled btn-lg";

document.getElementById("d16").className="icicon ion-plus-circled btn-lg";
document.getElementById("d17").className="icicon ion-plus-circled btn-lg";
   if(openTip  &&  shutTip){

    sourceObj.innerHTML = shutTip; 

   }

} else {

targetObj.style.display="block";
targetObj1.style.display="block"; 
targetObj2.style.display="block"; 
targetObj3.style.display="block"; 
targetObj4.style.display="block"; 
targetObj5.style.display="block"; 
targetObj6.style.display="block"; 
targetObj7.style.display="block"; 
targetObj8.style.display="block"; 
targetObj9.style.display="block"; 
targetObj10.style.display="block";
targetObj11.style.display="block";
targetObj12.style.display="block";
targetObj13.style.display="block";
targetObj14.style.display="block";
targetObj16.style.display="block";
targetObj17.style.display="block";
document.getElementById("d").className="icon ion-minus-circled btn-lg";
document.getElementById("d1").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d2").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d3").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d4").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d5").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d6").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d7").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d8").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d9").className="icon ion-minus-circled btn-lg"; 
document.getElementById("d10").className="icon ion-minus-circled btn-lg";
document.getElementById("d11").className="icon ion-minus-circled btn-lg";
document.getElementById("d12").className="icon ion-minus-circled btn-lg";
document.getElementById("d13").className="icon ion-minus-circled btn-lg";
document.getElementById("d14").className="icon ion-minus-circled btn-lg";
document.getElementById("d15").className="icon ion-minus-circled btn-lg";
document.getElementById("d16").className="icon ion-minus-circled btn-lg";
document.getElementById("d17").className="icon ion-minus-circled btn-lg";

   if(openTip  &&  shutTip){

    sourceObj.innerHTML = openTip; 

   }

}

}

</script>



<div id="passt" style="display: none;">
<?php

$opse=empty($_GET['opse'])?null:trim($_GET['opse']);

echo $opse;

?>

</div>


<script type="text/javascript">
	
var pass=$("#passt").text();
var	pb=pass.substr(1,15);
if(pb.indexOf("Disease")==0)
{
document.getElementsByClassName('sa')[0].checked=true ;
document.getElementById("d").className="icon ion-minus-circled btn-lg";
document.getElementById("pf").innerHTML=" 4 options selected";
document.getElementById("box").style.display="block";
var div=document.getElementById("box");
var chks=div.getElementsByClassName("tp"); 
}

if(pb.indexOf("Drug")==0)
{
document.getElementsByClassName('sa1')[0].checked=true ;
document.getElementById("d1").className="icon ion-minus-circled btn-lg";
document.getElementById("pf1").innerHTML=" 2 options selected";
document.getElementById("box1").style.display="block";
var div=document.getElementById("box1");
var chks=div.getElementsByClassName("tp1"); 
}


if(pb.indexOf("MicroRNA")==0)
{
document.getElementsByClassName('sa2')[0].checked=true ;
document.getElementById("d2").className="icon ion-minus-circled btn-lg";
document.getElementById("pf2").innerHTML=" 2 options selected";
document.getElementById("box2").style.display="block";
var div=document.getElementById("box2");
var chks=div.getElementsByClassName("tp2"); 
}


if(pb.indexOf("Cancer")==0)
{
	document.getElementsByClassName('sa3')[0].checked=true ;
document.getElementById("d3").className="icon ion-minus-circled btn-lg";
document.getElementById("pf3").innerHTML=" 28 options selected";
document.getElementById("box3").style.display="block";
var div=document.getElementById("box3");
var chks=div.getElementsByClassName("tp3"); 
}

if(pb.indexOf("Enhancer")==0)
{
	document.getElementsByClassName('sa4')[0].checked=true ;
	
document.getElementById("d4").className="icon ion-minus-circled btn-lg";
document.getElementById("pf4").innerHTML=" 3 options selected";
document.getElementById("box4").style.display="block";
var div=document.getElementById("box4");
var chks=div.getElementsByClassName("tp4"); 
}

if(pb.indexOf("sphancer")==0)
{
	
document.getElementById("d5").className="icon ion-minus-circled btn-lg";
document.getElementById("pf5").innerHTML=" 4 options selected";
document.getElementById("box5").style.display="block";
document.getElementsByClassName('sa5')[0].checked=true ;
/*ar divv=document.getElementById("box4");
var chkss=div.getElementsByClassName("tp4"); 
for(var i=0;i<chkss.length;i++)
{   chkss[i].checked;//全选  
 chkss[i].checked=!chkss[i].checked  //反选
}*/


var div=document.getElementById("box5");
var chks=div.getElementsByClassName("tp5"); 
}
if(pb.indexOf("Accessible")==0)
{
	document.getElementsByClassName('sa6')[0].checked=true ;
document.getElementById("d6").className="icon ion-minus-circled btn-lg";
document.getElementById("pf6").innerHTML=" 3 options selected";
document.getElementById("box6").style.display="block";
var div=document.getElementById("box6");
var chks=div.getElementsByClassName("tp6"); 
}
if(pb.indexOf("Chhancer")==0)
{
document.getElementById("d9").className="icon ion-minus-circled btn-lg";
document.getElementById("pf9").innerHTML=" 1 options selected";
document.getElementById("box9").style.display="block";
var div=document.getElementById("box9");
var chks=div.getElementsByClassName("tp9"); 
}
if(pb.indexOf("Subcellular")==0)
{
	document.getElementsByClassName('sa8')[0].checked=true ;
document.getElementById("d8").className="icon ion-minus-circled btn-lg";
document.getElementById("pf8").innerHTML=" 2 options selected";
document.getElementById("box8").style.display="block";
var div=document.getElementById("box8");
var chks=div.getElementsByClassName("tp8"); 
}
if(pb.indexOf("Cellmarker")==0)
{
document.getElementById("d7").className="icon ion-minus-circled btn-lg";
document.getElementById("pf7").innerHTML=" 1 options selected";
document.getElementById("box7").style.display="block";
var div=document.getElementById("box7");
var chks=div.getElementsByClassName("tp7"); 
}
if(pb.indexOf("Transcription")==0)
{
	document.getElementsByClassName('sa10')[0].checked=true ;
document.getElementById("d10").className="icon ion-minus-circled btn-lg";
document.getElementById("pf10").innerHTML=" 6 options selected";
document.getElementById("box10").style.display="block";
var div=document.getElementById("box10");
var chks=div.getElementsByClassName("tp10"); 
}
if(pb.indexOf("Methylation")==0)
{
document.getElementById("d12").className="icon ion-minus-circled btn-lg";
document.getElementById("pf11").innerHTML=" 1 options selected";
document.getElementById("box12").style.display="block";
var div=document.getElementById("box12");
var chks=div.getElementsByClassName("tp11"); 
}
if(pb.indexOf("Rbp")==0)
{
	document.getElementsByClassName('sa11')[0].checked=true ;
document.getElementById("d11").className="icon ion-minus-circled btn-lg";
document.getElementById("pf12").innerHTML=" 3 options selected";
document.getElementById("box11").style.display="block";
var div=document.getElementById("box11");
var chks=div.getElementsByClassName("tp12"); 
}
if(pb.indexOf("Survival")==0)
{

document.getElementById("d13").className="icon ion-minus-circled btn-lg";
document.getElementById("pf13").innerHTML=" 1 options selected";
document.getElementById("box13").style.display="block";
var div=document.getElementById("box13");
var chks=div.getElementsByClassName("tp13"); 
}
if(pb.indexOf("Smorf")==0)
{
	document.getElementsByClassName('sa14')[0].checked=true ;
document.getElementById("d14").className="icon ion-minus-circled btn-lg";
document.getElementById("pf14").innerHTML=" 2 options selected";
document.getElementById("box14").style.display="block";
var div=document.getElementById("box14");
var chks=div.getElementsByClassName("tp14"); 
}




if(pb.indexOf("Eqtl")==0)
{
	document.getElementsByClassName('sa16')[0].checked=true ;
document.getElementById("d16").className="icon ion-minus-circled btn-lg";
document.getElementById("pf16").innerHTML=" 4 options selected";
document.getElementById("box16").style.display="block";
var div=document.getElementById("box16");
var chks=div.getElementsByClassName("tp16"); 
}
if(pb.indexOf("conservation")==0)
{
	document.getElementsByClassName('sa17')[0].checked=true ;
document.getElementById("d17").className="icon ion-minus-circled btn-lg";
document.getElementById("pf17").innerHTML=" 4 options selected";
document.getElementById("box17").style.display="block";
var div=document.getElementById("box17");
var chks=div.getElementsByClassName("tp17"); 
}


for(var i=0;i<chks.length;i++)
{   chks[i].checked;//全选  
 chks[i].checked=!chks[i].checked  //反选
}
</script>

	

<script type="text/javascript">
function sa(ab,ac,ad,ae)
{
var div=document.getElementById(ab);
var chks=div.getElementsByClassName(ac); 
var pd=document.getElementsByClassName(ad);


if(pd[0].checked)
{	
for(var i=0;i<chks.length;i++)
{   
    chks[i].checked=true ;
    document.getElementById(ae).innerHTML=" "+(i+1)+" options selected";
}

}else
{	
	for(var i=0;i<chks.length;i++)
{  
	 chks[i].checked=false ;
   	document.getElementById(ae).innerHTML=" 0 options selected";
   }
}







}	


</script>
<script type="text/javascript">
	function Resetsel()
	{

 document.getElementById("pf").innerHTML=" 0 options selected";
			document.getElementById("pf1").innerHTML=" 0 options selected"; 
			document.getElementById("pf2").innerHTML=" 0 options selected"; 
			document.getElementById("pf3").innerHTML=" 0 options selected"; 
			document.getElementById("pf4").innerHTML=" 0 options selected"; 
			document.getElementById("pf5").innerHTML=" 0 options selected"; 
			document.getElementById("pf6").innerHTML=" 0 options selected"; 
			document.getElementById("pf7").innerHTML=" 0 options selected"; 
			document.getElementById("pf8").innerHTML=" 0 options selected"; 
			document.getElementById("pf9").innerHTML=" 0 options selected"; 
			document.getElementById("pf10").innerHTML=" 0 options selected";
			document.getElementById("pf11").innerHTML=" 0 options selected";
			document.getElementById("pf12").innerHTML=" 0 options selected";
			document.getElementById("pf13").innerHTML=" 0 options selected";
			document.getElementById("pf14").innerHTML=" 0 options selected";
			document.getElementById("pf15").innerHTML=" 0 options selected";
			document.getElementById("pf16").innerHTML=" 0 options selected"; 
		document.getElementById("pf17").innerHTML=" 0 options selected";
		
	}
</script>




<script type="text/javascript">
	
function  CheckAll(self)
{

	


  var its = document.getElementsByTagName("input");
  	
  if(self.id=="1")
  {
      for(var t=0;t<its.length;t++ )
		{
			if(its[t].type=="checkbox")
			{
				its[t].checked=true;
			}	
		}
		    document.getElementById("pf").innerHTML=" 4 options selected";
			document.getElementById("pf1").innerHTML=" 2 options selected"; 
			document.getElementById("pf2").innerHTML=" 2 options selected"; 
			document.getElementById("pf3").innerHTML=" 28 options selected"; 
			document.getElementById("pf4").innerHTML=" 3 options selected"; 
			document.getElementById("pf5").innerHTML=" 4 options selected"; 
			document.getElementById("pf6").innerHTML=" 3 options selected"; 
			document.getElementById("pf7").innerHTML=" 1 options selected"; 
			document.getElementById("pf8").innerHTML=" 2 options selected"; 
			document.getElementById("pf9").innerHTML=" 1 options selected"; 
			document.getElementById("pf10").innerHTML=" 6 options selected";
			document.getElementById("pf11").innerHTML=" 1 options selected";
			document.getElementById("pf12").innerHTML=" 3 options selected";
			document.getElementById("pf13").innerHTML=" 1 options selected";
			document.getElementById("pf14").innerHTML=" 2 options selected";
			document.getElementById("pf15").innerHTML=" 1 options selected";
			document.getElementById("pf16").innerHTML=" 4 options selected";
       document.getElementById("pf17").innerHTML=" 3 options selected";
			
             

		self.id="2";
	}
	else
	{
		for(var t=0;t<its.length;t++ )
		{
			if(its[t].type=="checkbox")
			{
				its[t].checked=false;
			}	
		}

			document.getElementById("pf").innerHTML=" 0 options selected";
			document.getElementById("pf1").innerHTML=" 0 options selected"; 
			document.getElementById("pf2").innerHTML=" 0 options selected"; 
			document.getElementById("pf3").innerHTML=" 0 options selected"; 
			document.getElementById("pf4").innerHTML=" 0 options selected"; 
			document.getElementById("pf5").innerHTML=" 0 options selected"; 
			document.getElementById("pf6").innerHTML=" 0 options selected"; 
			document.getElementById("pf7").innerHTML=" 0 options selected"; 
			document.getElementById("pf8").innerHTML=" 0 options selected"; 
			document.getElementById("pf9").innerHTML=" 0 options selected"; 
			document.getElementById("pf10").innerHTML=" 0 options selected";
			document.getElementById("pf11").innerHTML=" 0 options selected";
			document.getElementById("pf12").innerHTML=" 0 options selected";
			document.getElementById("pf13").innerHTML=" 0 options selected";
			document.getElementById("pf14").innerHTML=" 0 options selected";
			document.getElementById("pf15").innerHTML=" 0 options selected";
			document.getElementById("pf16").innerHTML=" 0 options selected"; 
			document.getElementById("pf17").innerHTML=" 0 options selected"; 

		self.id="1";
	}	




}



    $(document).ready(function () {

        var radios = $("input[name='me']");

        $("#input").click(function () {

            radios.eq(0).prop("checked", true);

            radios.eq(1).prop("checked", false);

        });

        $("#file").click(function () {

            radios.eq(0).prop("checked", false);

            radios.eq(1).prop("checked", true);

        });

    });











</script>

<script>
    $(function () { $("[class=\"glyphicon glyphicon-question-sign\"]").tooltip(); });
</script>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            <p style="color: white;">Copyright © 2019 School of Medical Informatics,Daqing Campus</p>
            <p style="color: white;margin-top: -30px"><img src="/LncSEA/public/img/beian.png" style="width: 18px;margin-bottom: 2px;"> <a href="http://www.beian.miit.gov.cn" style="color:#09c5ff">黑ICP备16009434号-1</a>  Harbin Medical University Chunquan Li Lab</p>
        </div>
    </div>
</footer><!-- #footer -->
</body>
</html>
<script src="js/public.js"></script>