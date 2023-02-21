import React from "react";
import Card from "@mui/material/Card";
import CardMedia from "@mui/material/CardMedia";
import CardContent from "@mui/material/CardContent";
import Typography from "@mui/material/Typography";

const Tableando = (props) => {
	return (
		<div style={props.activado ? {pointerEvents: "none"} : {}}>
			{props.datos.map((fila) => (
				<div style={{float: "left"}}>
					<Card
						sx={{
							width: 220,
							alignItems: "center",
							margin: 1,
							bgcolor: "#385aa3",
						}}
					>
						<CardContent
							sx={{
								display: "flex",
								maxWidth: 200,
							}}
						>
							<CardMedia
								sx={{
									maxWidth: 100,
								}}
								component="img"
								height="100"
								image={fila["sprite1"]}
								alt="imagen"
							/>
							<CardMedia
								sx={{
									maxWidth: 100,
								}}
								component="img"
								height="100"
								image={fila["sprite2"]}
								alt="imagen"
							/>
						</CardContent>
						<CardContent>
							<Typography
								variant="body2"
								title="id"
								sx={{
									color: "#ffcc00",
									fontSize: "18px",
									fontWeight: "bold",
								}}
							>
								ID - {fila["id"]}
							</Typography>
							<Typography
								variant="body2"
								sx={{
									color: "#ffcc00",
									fontSize: "18px",
									fontWeight: "bold",
								}}
								title="nombre"
							>
								{fila["name"].toUpperCase()}
							</Typography>
							<Typography
								variant="body2"
								sx={{
									color: "#ffcc00",
									fontSize: "18px",
									fontWeight: "bold",
								}}
								title="tipos"
							>
								Tipos - {fila["types"].toString()}
							</Typography>
							<Typography
								variant="body2"
								sx={{
									color: "#ffcc00",
									fontSize: "18px",
									fontWeight: "bold",
								}}
								title="altura"
							>
								Altura - {fila["height"]}
							</Typography>
						</CardContent>
					</Card>
				</div>
			))}
		</div>
	);
};

export default Tableando;
