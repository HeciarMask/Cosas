import Button from '@mui/material/Button';

function alertaClick(){
  window.alert("Clicked!");

}

function Ej2() {
  return (
     <Button variant="contained" onClick={alertaClick} >Contained</Button>
  );
}

export default Ej2;
