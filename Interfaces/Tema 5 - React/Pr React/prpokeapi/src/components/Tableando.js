import React from "react";
import Card from "@mui/material/Card";
import CardMedia from "@mui/material/CardMedia";
import CardContent from "@mui/material/CardContent";
import Typography from "@mui/material/Typography";

const Tableando = (props) => {
	return (
		<div style={props.activado ? {pointerEvents: "none"} : {}}>
			{props.datos.map((fila) => (
				<Card sx={{maxWidth: 345}}>
					<CardMedia
						component="img"
						height="160"
						image={fila["sprite1"]}
						alt="pokemones"
					/>
					<CardMedia
						component="img"
						height="160"
						image={fila["sprite2"]}
						alt="pokemones"
					/>
					<CardContent>
						<Typography variant="body2" color="text.secondary">
							ID: {fila["id"]}
						</Typography>
						<Typography variant="body2" color="text.secondary">
							Nombre: {fila["name"]}
						</Typography>
						<Typography variant="body2" color="text.secondary">
							Altura: {fila["height"]}
						</Typography>
					</CardContent>
				</Card>
			))}
		</div>
	);
};

export default Tableando;

/**
 * <Card sx={{ maxWidth: 345 }}>
      <CardMedia
        sx={{ height: 140 }}
        image="/static/images/cards/contemplative-reptile.jpg"
        title="green iguana"
      />
      <CardContent>
        <Typography gutterBottom variant="h5" component="div">
          Lizard
        </Typography>
        <Typography variant="body2" color="text.secondary">
          Lizards are a widespread group of squamate reptiles, with over 6,000
          species, ranging across all continents except Antarctica
        </Typography>
      </CardContent>
      <CardActions>
        <Button size="small">Share</Button>
        <Button size="small">Learn More</Button>
      </CardActions>
    </Card>
 */

/**
	 * <li key={fila["id"]}>ID: {fila["id"]}</li>
						<li key={fila["id"] + 1}>Nombre: {fila["name"]}</li>
						<li key={fila["id"] + 2}>Altura: {fila["height"]}</li>
						<li key={fila["id"] + 3}>
							<img alt="Foto frontal" src={fila["sprite1"]}></img>
						</li>
						<li key={fila["id"] + 4}>
							<img alt="Foto de atras" src={fila["sprite2"]}></img>
						</li>
	 */
