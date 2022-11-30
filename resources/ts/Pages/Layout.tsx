import React from "react";
import Main from "./Main";
import Footer from "./Footer";
import Hero from "./Hero";

interface LayoutProps {}

const Layout: React.FC<LayoutProps> = (props) => {
  return (
      <div>
        <h1>Layout Component</h1>
        <Hero />
        <Main />
        <Footer />
    </div>
  )
};
export default Layout;
