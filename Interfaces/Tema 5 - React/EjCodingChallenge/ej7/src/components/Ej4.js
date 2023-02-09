import Button from '@mui/material/Button';
import React from 'react';

class Ej4 extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      contador : 0
    }; 
  }
  onClickHandler(){
    this.setState({
       contador : this.state.contador+1
    });
  }
  render(){
    return (
      <div>  
        <Contador valor={this.state.contador}/>
        <Button variant="contained" onClick={()=>this.onClickHandler()}>Contained</Button>
      </div>
    )
  }
}

const Contador = props => {
  return(
    <div>
      Button has been clicked: {props.valor} times
    </div>
  );
};

export default Ej4;