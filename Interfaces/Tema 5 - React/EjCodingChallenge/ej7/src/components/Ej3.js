import Button from '@mui/material/Button';


function Ej3(props) {

  function alertaClick(){
  window.alert(`You clicked on Button ${props.button}!`);
  }
  return (
     <Button variant="contained" onClick={alertaClick} >Contained</Button>
  );
}

export default Ej3;
