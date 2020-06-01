const path = require(`path`);
const makeRequest = (graphql, request) => new Promise((resolve, reject) => {  
  resolve(
    graphql(request).then(result => {
      if (result.errors) {
        reject(result.errors)
      }
      return result;
    })
  )
});

exports.createPages = ({ boundActionCreators, graphql }) => {  
  const { createPage } = boundActionCreators;

  const getPlayers = makeRequest(graphql, `
    {
      allStrapiPlayers {
        edges {
          node {
            id
          }
        }
      }
    }
    `).then(result => {
    result.data.allStrapiPlayers.edges.forEach(({ node }) => {
      createPage({
        path: `/${node.id}`,
        component: path.resolve(`src/pages/player.js`),
        context: {
          id: node.id,
        },
      })
    })
  });

  const getTeams = makeRequest(graphql, `
    {
      allStrapiTeams {
        edges {
          node {
            id
          }
        }
      }
    }
    `).then(result => {
    result.data.allStrapiTeams.edges.forEach(({ node }) => {
      createPage({
        path: `/${node.id}`,
        component: path.resolve(`src/pages/team.js`),
        context: {
          id: node.id,
        },
      })
    })
  });

  const getMatches = makeRequest(graphql, `
    {
      allStrapiMatches {
        edges {
          node {
            id
          }
        }
      }
    }
    `).then(result => {
    result.data.allStrapiMatches.edges.forEach(({ node }) => {
      createPage({
        path: `/${node.id}`,
        component: path.resolve(`src/pages/match.js`),
        context: {
          id: node.id,
        },
      })
    })
  });

  return Promise.all([
    getPlayers,
    getTeams,
    getMatches
  ])
};
